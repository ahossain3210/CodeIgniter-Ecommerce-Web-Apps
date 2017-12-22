<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
    {
        $data=Array();
        
        $sdata=array();
        $sdata['cName']='Welcome';
        $sdata['fName']='index';
        $sdata['pName']='';
        
//        session_start();
        
                                        
//        echo '<pre>';
//        print_r($_SESSION);
//        exit();
        
        $this->session->set_userdata($sdata);

        $data['title']="Home | Welcome to E-Shopper";
        $data['slider']=TRUE;
        $data['category']=TRUE;
        $data['brands']=TRUE;
        $data['priceRange']=TRUE;
        $data['shippingCenterImage']=TRUE;
        
        $data['latestProduct']=  $this->Welcome_Model->selectLatestProduct();
        $data['viewFeaturedProduct']=  $this->Welcome_Model->selectFeaturedProduct();
        $data['computer_collection']=  $this->Welcome_Model->select_computer_info();
//        echo '<pre>';
//        print_r($data['viewFeaturedProduct']);
//        exit();
        $data['allPublishManufacturer']=  $this->Welcome_Model->selectAllPublishManufacturer();
        $data['mainContent']=  $this->load->view('pages/homeContent',$data,TRUE);

        $this->load->view('master',$data);
    }
    public function all_product()
    {
        $data=array();
        
        $data['title']="Our all available products | E-shopper";
        
//        $data['viewProduct']=  $this->Welcome_Model->selectViewProduct();
        
        /*
             * Start Pagination
             */
            $this->load->library('pagination');

            $config['base_url'] = 'http://localhost:431/eye_fashion/Welcome/all_product';
            $config['total_rows'] = $this->db->count_all('tbl_product');
            $config['per_page'] = 10;
            $config['full_tag_open'] = "<ul class='horizontal_list clearfix d_inline_middle f_size_medium m_left_10 pagination-lg'>";
            $config['full_tag_close'] = "<ul>";
            $config['first_tag_open'] = "<li class='m_right_30'><a class='color_dark'>";
            $config['first_tag_close'] = "</a></li>";
            $config['last_tag_open'] = "<li class='m_right_30'><a class='color_dark'>";
            $config['last_tag_close'] = "</a></li>";
//            $config['first_link'] = "First";
//            $config['last_link'] = "Last";
            $config['next_tag_open'] = "<li class='m_right_30'><a class='color_dark'>";
            $config['next_tag_close'] = "</a><li>";
            $config['prev_tag_open'] = "<li class='m_right_30'><a class='color_dark'>";
            $config['prev_tag_close'] = "</a></li>";
            $config['num_tag_open'] = "<li class='m_right_30'><a class='color_dark'>";
            $config['num_tag_close'] = "</a></li>";
            $config['cur_tag_open'] = "<li class='active color_dark m_right_30'><a class='scheme_color'>";
            $config['cur_tag_close'] = "</a></li>";

            $this->pagination->initialize($config);
            
            
            $data['viewProduct']= $this->Welcome_Model->selectViewProduct($config['per_page'],  $this->uri->segment(3));
            
            
            /*
             * End Pagination
             */
            
        
        $data['viewFeaturedProduct']=  $this->Welcome_Model->selectFeaturedProduct();
//        echo '<pre>';
//        print_r($data['viewFeaturedProduct']);
//        exit();
        $data['allPublishManufacturer']=  $this->Welcome_Model->selectAllPublishManufacturer();
        $data['mainContent']=  $this->load->view('pages/all_product',$data,TRUE);
        $this->load->view('master',$data);
    }
    public function contact()
    {
        $data=array();
        
        $data['title']="Contact | E-shopper";
        
        $data['categories']=TRUE;
        $data['wishList']=TRUE;
        $data['newProducts']=TRUE;
        $data['popularArticles']=TRUE;
        
        $data['mainContent']=  $this->load->view('pages/contact',$data,TRUE);
        $this->load->view('master',$data);
    }

    public function categoryProduct($category_id)
    {

        $data=array();
        
        $data['title']="Category Product";
//        $data['allPublishCategory']=  $this->Welcome_Model->selectAllPublishCategory();
//        $data['viewProduct']=  $this->Welcome_Model->selectViewProduct();
        $data['allPublishManufacturer']=  $this->Welcome_Model->selectAllPublishManufacturer();
        
        $data['viewCategoryProduct']=  $this->Welcome_Model->viewCategoryProductById($category_id);
        $data['viewProductCategory']=  $this->Welcome_Model->viewProductCategoryById($category_id);
//        echo '<pre>';
//        print_r($viewCategoryProduct);
//        exit();
        $data['mainContent']=  $this->load->view('pages/categoryProduct',$data,TRUE);
        $this->load->view('master',$data);
    }
    public function manufacturerProduct($manufacturer_id)
    {
        $data=array();
        
        $data['title']="Manufacturer Product";
        
        $data['viewManufacturerProduct']=  $this->Welcome_Model->viewManufacturerProductById($manufacturer_id);
        $data['viewManufacturerName']=  $this->Welcome_Model->viewManufacturerNameById($manufacturer_id);
//        echo '<pre>';
//        print_r($viewManufacturerProduct);
//        exit();
        
        $data['mainContent']=  $this->load->view('pages/manufacturerProduct',$data,TRUE);
        $this->load->view('master',$data);
    }

    public function productDetails($product_id)
    {
        $data=array();
        
        $sdata=array();
        $sdata['cName']='Welcome';
        $sdata['fName']='productDetails';
        $sdata['pName']=$product_id;
        
        $this->session->set_userdata($sdata);
        
//        echo '<pre>';
//        print_r($_SESSION);
//        exit();
        
        $data['title']="Product Details";
        $data['productInfo']=  $this->Welcome_Model->productInfoById($product_id);
        
//        echo '<pre>';
//        print_r($productInfo);
//        exit();
        
        $data['mainContent']=  $this->load->view('pages/productDetails',$data,TRUE);
        $this->load->view('master',$data);
        
    }
    public function search_product()
    {
        $data=array();
        
        $data['title']="Eye Fashion | Searching products";
        
        $search_item=  $this->input->post('search_item');
        
//        echo $search_item;
//        exit();
        
        $product_item=$this->Welcome_Model->select_search_item_info($search_item);
        
        if($product_item==NULL)
        {
            $data['mainContent']=  $this->load->view('pages/search_product_empty',$data,TRUE);
            $this->load->view('master',$data);
        }
         else {
             
            $data['search_product_item']=$product_item;
            $data['mainContent']=  $this->load->view('pages/search_product',$data,TRUE);
            $this->load->view('master',$data);
         }
        
//        echo "<pre>";
//        print_r($data['search_item']);
//        exit();
        
        
        
    }
    public function latest_product()
    {
        $data=array();
        
        $data['title']='E-Shopper | Our latest product';
        
        $data['new_product']=  $this->Welcome_Model->select_new_product();
        $data['allPublishManufacturer']=  $this->Welcome_Model->selectAllPublishManufacturer();
        $data['mainContent']=  $this->load->view('pages/latest_product',$data,TRUE);
        $this->load->view('master',$data);
    }
    public function mobile_collection()
    {
        $data=array();
        
        $data['title']='E-Shopper | Mobile collection';
        
        $data['mobile_collection']=$this->Welcome_Model->select_all_mobile_info();
        $data['allPublishManufacturer']=  $this->Welcome_Model->selectAllPublishManufacturer();
        $data['mainContent']=  $this->load->view('pages/mobile_collection',$data,TRUE);
        $this->load->view('master',$data);
    }
    public function computer_collection()
    {
        $data=array();
        
        $data['title']='E-Shopper | Computer collection';
        
        $data['all_computer_collection']=$this->Welcome_Model->select_all_ocomputer_info();
        $data['allPublishManufacturer']=  $this->Welcome_Model->selectAllPublishManufacturer();
        $data['mainContent']=  $this->load->view('pages/computer_collection',$data,TRUE);
        $this->load->view('master',$data);
    }
    public function feature_product()
    {
        $data=array();
        
        $data['title']='E-Shopper | Feature Product';
        
        $data['feature_products']=$this->Welcome_Model->select_all_feature_products_info();
        $data['allPublishManufacturer']=  $this->Welcome_Model->selectAllPublishManufacturer();
        $data['mainContent']=  $this->load->view('pages/feature_product',$data,TRUE);
        $this->load->view('master',$data);
    }
    public function save_customer_message()
    {
        $this->Welcome_Model->save_customer_message_info();
        
        $sdata=array();
        
        $sdata['message']="Sent successfully ! Please wait for the reply..";
        $this->session->set_userdata($sdata);
        
        redirect('contact');
    }
}
