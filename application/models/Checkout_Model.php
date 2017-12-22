<?php


class Checkout_Model extends CI_Model{
    //put your code here
    
    public function saveCustomrInfo()
    {
        $data=array();
        
        $data['customer_name']=  $this->input->post('customer_name');
        $data['customer_email']=  $this->input->post('customer_email');
        $data['customer_password']= md5($this->input->post('customer_password'));
        
        $this->db->insert('tbl_customer',$data);
        
        $customer_id=  $this->db->insert_id();
        $sdata=array();
        $sdata['customer_id']=$customer_id;
        $sdata['customer_name']=$data['customer_name'];
        $this->session->set_userdata($sdata);
        
//        echo '<pre>';
//        print_r($_SESSION);
//        exit();
    }
    public function selectOrderInfoById($customer_id)
    {
        $this->db->select('*')
                ->from('tbl_order_details')
                ->join('tbl_order','tbl_order.order_id=tbl_order_details.order_id')
                ->join('tbl_payment','tbl_payment.payment_id=tbl_order.payment_id')
                ->where('tbl_order.customer_id',$customer_id);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
        
        return $result;
    }
    public function customerLoginCheck()
    {
        $customer_email=  $this->input->post('customer_email',TRUE);
        $customer_password= md5($this->input->post('customer_password',TRUE));
        
//        $customerPassword=  md5($customerPassword);
        $this->db->select('*')
                ->from('tbl_customer')
                ->where('customer_email',$customer_email)
                ->where('customer_password',$customer_password)
                ->join('tbl_billing','tbl_billing.customer_id=tbl_customer.customer_id')
                ->join('tbl_shipping','tbl_shipping.customer_id=tbl_customer.customer_id');
        $query_result=  $this->db->get();
        $result=$query_result->row();
        
//        echo $result;
//        exit();
        
        return $result;
    }

    public function saveBillingInfo()
    {
        $data=array();
        
        $data['customer_id']=$this->session->userdata('customer_id');
        $data['company_name']=$this->input->post('company_name',TRUE);
        $data['first_name']=$this->input->post('first_name',TRUE);
        $data['last_name']=$this->input->post('last_name',TRUE);
        $data['address']=$this->input->post('address',TRUE);
//        $data['nid']=$this->input->post('nid',TRUE);
        $data['postal_code']=$this->input->post('postal_code',TRUE);
        $data['city']=$this->input->post('city',TRUE);
        $data['country']=$this->input->post('country',TRUE);
        $data['mobile']=$this->input->post('mobile',TRUE);
        $data['fax']=$this->input->post('fax',TRUE);
//        echo '<pre>';
//        print_r($data);
//        exit();
        
        $this->db->insert('tbl_billing',$data);
        
        $sdata=array();
        $sdata['billing_id']=  $this->db->insert_id();
        $this->session->set_userdata($sdata);
        
    }
    public function saveShippingInfo()
    {
        $data=array();
        
        $data['customer_id']=$this->session->userdata('customer_id');
        $data['company_name']=$this->input->post('company_name',TRUE);
        $data['first_name']=$this->input->post('first_name',TRUE);
        $data['last_name']=$this->input->post('last_name',TRUE);
        $data['address']=$this->input->post('address',TRUE);
        $data['email']=$this->input->post('email',TRUE);
        $data['postal_code']=$this->input->post('postal_code',TRUE);
        $data['city']=$this->input->post('city',TRUE);
        $data['country']=$this->input->post('country',TRUE);
        $data['mobile']=$this->input->post('mobile',TRUE);
//        echo '<pre>';
//        print_r($data);
//        exit();
        
        $this->db->insert('tbl_shipping',$data);
        
        $sdata=array();
        $sdata['shipping_id']=  $this->db->insert_id();
        $this->session->set_userdata($sdata);
        
    }
    public function savePaymentInfo($data)
    {
        $this->db->insert('tbl_payment',$data);
        
        $sdata=array();
        $sdata['payment_id']=  $this->db->insert_id();
        $this->session->set_userdata($sdata);
    }
    public function saveOrderInfo()
    {
        $odata=array();
        $odata['customer_id']=  $this->session->userdata('customer_id');
        $odata['billing_id']=  $this->session->userdata('billing_id');
        $odata['shipping_id']=  $this->session->userdata('shipping_id');
        $odata['payment_id']=  $this->session->userdata('payment_id');
        $odata['order_total']=  $this->session->userdata('total');
        
        
//        echo $odata;
//        exit();
        
        $this->db->insert('tbl_order',$odata);
        
        $order_id=  $this->db->insert_id();
        
        
        foreach ($this->cart->contents() as $v_contents)
        {
            $oddtata=array();
            $oddtata['order_id']=$order_id;
            $oddtata['product_id']=$v_contents['id'];
            $oddtata['product_name']=$v_contents['name'];
            $oddtata['product_price']=$v_contents['price'];
            $oddtata['product_sales_quantity']=$v_contents['qty'];
            
            $this->db->insert('tbl_order_details',$oddtata);
        }
        $this->cart->destroy();
        $sql="update tbl_product, tbl_order_details set tbl_product.product_quantity=tbl_product.product_quantity-tbl_order_details.product_sales_quantity where tbl_product.product_id=tbl_order_details.product_id and tbl_order_details.order_id='$order_id'";
        $this->db->query($sql);
    }
//    public function saveOrderDetailsInfo($oddtata)
//    {
//        $this->db->insert('tbl_order_details',$oddtata);
//    }
    
    public function cancel_order_info_by_id($order_id)
    {
        $this->db->where('order_id',$order_id)
                ->delete(tbl_order);
    }
}
