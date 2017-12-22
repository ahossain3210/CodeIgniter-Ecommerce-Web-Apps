<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller{
    
    public function customerRegistration()
    {
        $data=array();
        
        $data['title']="Customer Checkout | E-shopper";

        $data['categories']=TRUE;
        $data['wishList']=TRUE;
        $data['newProducts']=TRUE;
        $data['popularArticles']=TRUE;

        $data['mainContent']=  $this->load->view('pages/checkoutForm',$data,TRUE);
        $this->load->view('master',$data);
    }
    public function orderList()
    {
        $data=array();
        
        $data['title']="Customer Order List";

        $data['categories']=TRUE;
        $data['wishList']=TRUE;
        $data['newProducts']=TRUE;
        $data['popularArticles']=TRUE;
        $customer_id=  $this->session->userdata('customer_id');
        $orderInfo=  $this->Checkout_Model->selectOrderInfoById($customer_id);
        if ($orderInfo==NULL)
        {
            $data['mainContent']=  $this->load->view('pages/empty_order_list',$data,TRUE);
            $this->load->view('master',$data);
        }
        else {
            $data['orderInfo']=$orderInfo;
            $data['mainContent']=  $this->load->view('pages/orderList',$data,TRUE);
            $this->load->view('master',$data);
 }
        
    }

    public function saveCustomer()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('customer_name', 'Full Name', 'required');
        $this->form_validation->set_rules('customer_email', 'Email', 'required');
        $this->form_validation->set_rules('customer_password', 'Password', 'required');
//        $this->form_validation->set_rules('conPassword', 'Confirm Password', 'required');
        

        if ($this->form_validation->run() == FALSE)
        {
//            echo validation_errors('<div class="error">', '</div>');
//            exit();
            $data=array();
            
            $data['mainContent']=  $this->load->view('pages/checkoutForm',$data,TRUE);
            $this->load->view('master',$data);
        }
        else
        {
            $this->Checkout_Model->saveCustomrInfo();
            
            redirect('billing');
        }
    }
    public function customerLogin()
    {
        $result=$this->Checkout_Model->customerLoginCheck();
        
        if($result)
        {
            $data=array();
            
            $data['customer_id']=$result->customer_id;
            $data['customer_name']=$result->customer_name;
            $data['billing_id']=$result->billing_id;
            $data['shipping_id']=$result->shipping_id;
            $this->session->set_userdata($data);
            
            redirect('Checkout/payment');
        }
        else {
            $failureMessage=array();
            $failureMessage['message']="Your Email or Password is Incorrect!";
            $this->session->set_userdata($failureMessage);
            
            redirect('Checkout/customerRegistration');
        }
        
        
    }
    public function customerLogout()
    {
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('customer_name');
        $this->session->unset_userdata('billing_id');
        $this->session->unset_userdata('shipping_id');
//        $this->session->unset_userdata('paymentId');
        
        redirect('welcome');
    }
    public function billing()
    {
        $data=array();
        
        $data['title']="Customer Billing | E-shopper";

        $data['categories']=TRUE;
        $data['wishList']=TRUE;
        $data['newProducts']=TRUE;
        $data['popularArticles']=TRUE;

        $data['mainContent']=  $this->load->view('pages/billing',$data,TRUE);
        $this->load->view('master',$data);
    }
    public function saveBilling()
    {
        $this->Checkout_Model->saveBillingInfo();
        
        redirect('shipping');
    }
    public function shipping()
    {
        $data=array();
        
        $data['title']="Customer shipping | E-shopper";

        $data['categories']=TRUE;
        $data['wishList']=TRUE;
        $data['newProducts']=TRUE;
//        $data['popularArticles']=TRUE;

        $data['mainContent']=  $this->load->view('pages/shipping',$data,TRUE);
        $this->load->view('master',$data);
    }
    public function saveShipping()
    {
        $this->Checkout_Model->saveShippingInfo();
        
//        echo '<pre>';
//        print_r($_SESSION);
//        exit();
//        
        
        redirect('payment');
    }
    public function payment()
    {
        $data=array();
        
        $data['title']="Payment | E-shopper";

//        $data['categories']=TRUE;
        $data['wishList']=TRUE;
        $data['newProducts']=TRUE;
//        $data['popularArticles']=TRUE;

        $data['mainContent']=  $this->load->view('pages/payment',$data,TRUE);
        $this->load->view('master',$data);
    }
    public function placeOrder()
    {
        $data=array();
        $payment_type=  $this->input->post('payment_type',TRUE);
//        echo $paymentType;
        $data['payment_type']=$payment_type;
        $this->Checkout_Model->savePaymentInfo($data);
        
        if($payment_type=='CashOnDelivery')
        {
            $this->Checkout_Model->saveOrderInfo();
            
//            ...........Send Email To Buyer..........
//            $mdata=array();
//            
//            $mdata['fromEmail']="ownerinfo@gmail.com";
//            $mdata['adminFullName']="Webpars Technology Limited.";
//            $mdata['subject']="Activation Email";
//            $mdata['toEmail']=  $this->input->post('userEmail',TRUE);
//            
//            
//            $mdata['userName']=  $this->input->post('userName',TRUE);
//            $mdata['userPassword']=  $this->input->post('userPassword',TRUE);
//            $mdata['userId']=$userId;
//            
//            $this->Mailer_Model->sendEmail($mdata,'activationEmail');
            
            
//            ............Send Email To Marchant..........
            
            redirect('Checkout/orderComplete');
        }
        else if($payment_type=='Paypal')
        {
            $this->Checkout_Model->saveOrderInfo();
            
            
            $this->load->view('pages/htmlWebsiteStandardPayment');
        }
    }
    public function orderComplete()
    {
        $data=array();
        
        $data['title']="Order Complete Message";

//        $data['categories']=TRUE;
//        $data['wishList']=TRUE;
//        $data['newProducts']=TRUE;
//        $data['popularArticles']=TRUE;

        $data['mainContent']=  $this->load->view('pages/orderComplete',$data,TRUE);
        $this->load->view('master',$data);
    }
    public function cancel_order($order_id)
    {
//        echo $order_id;
        $this->Checkout_Model->cancel_order_info_by_id($order_id);
        
        $sdata=array();
        $sdata['message']="Cancel order Succeessfull!";
        $this->session->set_userdata($sdata);
        
        redirect('order-list');
    }
}
