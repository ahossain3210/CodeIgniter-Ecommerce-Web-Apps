<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        $admin_id=  $this->session->userdata('admin_id');
        if($admin_id==NULL)
        {
            redirect('Admin');
        }
    }
    
    
    public function index()
    {
        $data=array();
        
        $data['title']="cPannel | E-shopper";
        
        $data['adminMainContent']=  $this->load->view('admin/adminPages/adminMainContent','',TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function logout()
    {
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_id');
        
        
        
        $confirmationMessage=array();
        $confirmationMessage['logoutMessage']="Your are successfully logout!";
        $this->session->set_userdata($confirmationMessage);
        
        redirect('admin/index');
    }
    public function addCategory()
    {
        $data=array();
        
        $data['title']="Add Category | E-shopper";
        $data['adminMainContent']=  $this->load->view('admin/adminPages/addCategory','',TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function saveCategory()
    {
        $data=array();
        $data['category_name']=  $this->input->post('category_name',TRUE);
        $data['category_description']=  $this->input->post('category_description',TRUE);
        $data['publication_status']=  $this->input->post('publication_status',TRUE);
        $this->Dashboard_Model->saveCategoryInfo($data);
        
        $confirmationMessage=array();
        $confirmationMessage['message']="Save Category Successfully!";
        $this->session->set_userdata($confirmationMessage);
        
        
        redirect('Dashboard/addCategory');
    }
    public function manageCategory()
    {
        $data=array();
        
        $data['title']="Manage Category -Dashboard | E-shopper";
        $data['selectAllCategory']=  $this->Dashboard_Model->selectAllCategoryInfo();
        $data['adminMainContent']=  $this->load->view('admin/adminPages/manageCategory',$data,TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function unpublishCategory($category_id)
    {
        $this->Dashboard_Model->unpublishCategoryById($category_id);
        
        redirect('manage-category');
    }
    public function publishCategory($category_id)
    {
        $this->Dashboard_Model->publishCategoryById($category_id);
        
        redirect('manage-category');
    }
    public function deleteCategory($category_id)
    {
        $this->Dashboard_Model->deleteCategoryById($category_id);
        
        redirect('manage-category');
    }
    public function editCategory($category_id)
    {
        $data=array();
        
        $data['title']="Dashboard | Update Category";
        
        $data['editCategoryInfoById']=  $this->Dashboard_Model->selectEditCategoryInfoById($category_id);
        $data['adminMainContent']=  $this->load->view('admin/adminPages/editCategory',$data,TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function updateCategory()
    {
        $data=array();
        $category_id=  $this->input->post('category_id',TRUE);
        $data['category_name']= $this->input->post('category_name');
        $data['category_description']= $this->input->post('category_description');
        $this->Dashboard_Model->updateCategoryInfo($data,$category_id);
        
        $confirmMessage=array();
        $confirmMessage['message']="Update Category Successfully";
        $this->session->set_userdata($confirmMessage);
        
        redirect('edit-category/'.$category_id);
    }
    public function addBlog()
    {
        $data=array();
        
        $data['title']="Dashboard | Add Blog";
        $data['allPublishCategory']=  $this->Welcome_Model->selectAllPublishCategory();
        $data['adminMainContent']=  $this->load->view('admin/adminPages/addBlog',$data,TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function saveBlog()
    {
        $data=array();
        
        $data['blog_title']= $this->input->post('blog_title',TRUE);
        $data['category_id']= $this->input->post('category_id',TRUE);
        $data['blog_short_description']= $this->input->post('blog_short_description',TRUE);
        $data['blog_long_description']= $this->input->post('blog_long_description',TRUE);
//        $data['blogImage']= $this->input->post('blogImage',TRUE);
        $data['publication_status']= $this->input->post('publication_status',TRUE);
        $this->Dashboard_Model->saveBlogInfo($data);
        
        $confirmationMessage=array();
        
        $confirmationMessage['message']="Your Blog Save Successfully!";
        $this->session->set_userdata($confirmationMessage);
        
        redirect("add-blog");
    }
    public function manageBlog()
    {
        $data=array();

        $data['title']="Dashboard | Manage Blog";
        
        $data['selectAllBlog']=  $this->Dashboard_Model->selectAllBlogInfo();
        
        $data['adminMainContent']=  $this->load->view('admin/adminPages/manageBlog',$data,TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function unpublishBlog($blog_id)
    {
        $this->Dashboard_Model->unpublishBlogById($blog_id);
        
        redirect('Dashboard/manageBlog');
    }
    public function publishBlog($blog_id)
    {
        $this->Dashboard_Model->publishBlogById($blog_id);
        
        redirect('Dashboard/manageBlog');
    }
    public function deleteBlog($blog_id)
    {
        $this->Dashboard_Model->deleteBlogById($blog_id);
        
        redirect('Dashboard/manageBlog');
    }
    public function editBlog($blog_id)
    {
        $data=array();
        
        $data['title']="Dashboard | Edit Blog";
        
        
        
        $data['blogInfoById']=  $this->Dashboard_Model->selectBlogInfoById($blog_id);
        
        
        $data['allPublishCategory']=  $this->Welcome_Model->selectAllPublishCategory();
        $data['adminMainContent']=  $this->load->view('admin/adminPages/editBlog',$data,TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function updateBlog()
    {
        $data=array();
        
        $blogId=  $this->input->post('blog_id',TRUE);
        $data['blogTitle']= $this->input->post('blog_title');
        
        $data['blog_short_description']= $this->input->post('blog_short_description');
        $data['blog_long_description']= $this->input->post('blog_long_description');
        $data['blog_image']= $this->input->post('blog_image');
        $this->Dashboard_Model->updateBlogInfo($data,$blog_id);
        
        $confirmMessage=array();
        $confirmMessage['message']="Update Category Successfully";
        $this->session->set_userdata($confirmMessage);
        
        redirect('Dashboard/editCategory/'.$blog_id);
    }
    
     /*............Manufacturer ...................*/
    
    public function addManufacturer()
    {
        $data=array();
        
        $data['title']="Dashboard | Add Manufacturer";
        $data['allPublishCategory']=  $this->Welcome_Model->selectAllPublishCategory();
        $data['adminMainContent']=  $this->load->view('admin/adminPages/addManufacturer',$data,TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function saveManufacturer()
    {
        $data=array();
        $data['manufacturer_name']=  $this->input->post('manufacturer_name',TRUE);
        $data['category_id']=  $this->input->post('category_id',TRUE);
        $data['manufacturer_description']=  $this->input->post('manufacturer_description',TRUE);
        $data['publication_status']=  $this->input->post('publication_status',TRUE);
        
//        .............Uploading Image Files Start..................
        
        
        $error=array();
        $fdata=array();
                $config['upload_path']          = './productImages/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 50000;
                $config['max_width']            = 5000;
                $config['max_height']           = 8000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('manufacturer_image'))
                {
                        $error =$this->upload->display_errors();
                        
                        $errorMessage=array();
                        $errorMessage['errMessage']="Your image does't upload!";
                        $this->session->set_userdata($errorMessage);
                        
//                       echo '<pre>';
//                       print_r($error);
                }
                else
                {
                        $fdata = $this->upload->data();
//                        echo '<pre>';
//                        print_r($fdata);
//                        exit();
                        $data['manufacturer_image']=$config['upload_path'].$fdata['file_name'];
                }
        
        
//        .............Uploading Image Files Ends..................
        
        $this->Dashboard_Model->saveManufacturerInfo($data);
        
        $confirmationMessage=array();
        $confirmationMessage['message']="Save Manufacturer Successfully!";
        $this->session->set_userdata($confirmationMessage);
        
        redirect('Dashboard/addManufacturer');
    }
    public function manageManufacturer()
    {
        $data=array();
        
        $data['title']="Manage Manufacturer -Dashboard | E-shopper";
        $data['manufacturer_info']=  $this->Dashboard_Model->selectManufacturerInfo();
        $data['adminMainContent']=  $this->load->view('admin/adminPages/manageManufacturer',$data,TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function publishManufacturer($manufacturer_id)
    {
        $this->Dashboard_Model->publishManufacturerById($manufacturer_id);
        
        redirect('Dashboard/manageManufacturer');
    }
    public function unpublishManufacturer($manufacturer_id)
    {
        $this->Dashboard_Model->unpublishManufacturerById($manufacturer_id);
        
        redirect('Dashboard/manageManufacturer');
    }
    public function editManufacturer($manufacturer_id)
    {
        $data=array();
        
        $data['title']="Dashboard | Edit Manufacturer";
        $data['allPublishCategory']=  $this->Welcome_Model->selectAllPublishCategory();
        $data['manufacturerInfo']=  $this->Dashboard_Model->manufacturerInfoById($manufacturer_id);
        $data['adminMainContent']=  $this->load->view('admin/adminPages/editManufacturer',$data,TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function updateManufacturer()
    {
        if(($_FILES['manufacturer_image']['name']== '')||($_FILES['manufacturer_image']['name']== NULL)){ 
            $mid=  $this->input->post('manufacturer_id',true); 
            $data= array();
            $data['manufacturer_name']=  $this->input->post('manufacturer_name',true);
            $data['category_id']=  $this->input->post('category_id',true);
            $data['manufacturer_description']=  $this->input->post('manufacturer_description',true);
            $data['publication_status']=  $this->input->post('publication_status',true);
            $this->Dashboard_Model->updateManufacturerOldImage($data,$mid);
        }else {
            $mid=  $this->input->post('manufacturer_id',true); 
            $data= array();
            $data['manufacturer_name']=  $this->input->post('manufacturer_name',true);
            $data['category_id']=  $this->input->post('category_id',true);
            $data['manufacturer_description']=  $this->input->post('manufacturer_description',true);
            $data['publication_status']=  $this->input->post('publication_status',true);
    
            $fdata=array();
            $config['upload_path']='IconImages/';
            $config['allowed_types']= 'gif|png|jpg';
            $config['max_size']= '5000';
            $config['max_width']='5000';
            $config['max_height']='5000';     
            
            $this->load->library('upload',$config);
            if($this->upload->do_upload('manufacturer_image')){
                $fdata=  $this->upload->data();
                $data['manufacturer_image']=$config['upload_path'].$fdata['file_name'];
            }   
            $this->Dashboard_Model->updateManufacturerNewImage($data,$mid);
        }
        $sdata= array();
        $sdata['message']="Your data update successfully";
        $this->session->set_userdata($sdata);
        
        redirect('Dashboard/addManufacturer');
    }

    public function deleteManufacturer($manufacturer_id)
    {
        $this->Dashboard_Model->deleteManufacturerById($manufacturer_id);
        
        redirect('Dashboard/manageManufacturer');
    }
    
    
     /*............Products ...................*/
    
    public function addProduct()
    {
        $data=array();
        
        $data['title']="Dashboard | Add Product";
        $data['allPublishCategory']=  $this->Welcome_Model->selectAllPublishCategory();
        $data['allPublishManufacturer']=  $this->Welcome_Model->selectAllPublishManufacturer();
        $data['adminMainContent']=  $this->load->view('admin/adminPages/addProduct',$data,TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function saveProduct()
    {
        $data=array();
        
        $data['product_name']=  $this->input->post('product_name',TRUE);
        $data['category_id']=  $this->input->post('category_id',TRUE);
        $data['manufacturer_id']=  $this->input->post('manufacturer_id',TRUE);
        $data['product_price']=  $this->input->post('product_price',TRUE);
        $data['previous_product_price']=  $this->input->post('previous_product_price',TRUE);
        $data['product_quantity']=  $this->input->post('product_quantity',TRUE);
        $data['featured_product']=  $this->input->post('featured_product',TRUE);
        $data['product_short_description']=  $this->input->post('product_short_description',TRUE);
        $data['product_long_description']=  $this->input->post('product_long_description',TRUE);
        
        //        .............Uploading Image Files Start..................
        
        
        $error=array();
        $fdata=array();
                $config['upload_path']          = './productImages/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 50000;
                $config['max_width']            = 5000;
                $config['max_height']           = 8000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('product_image'))
                {
                        $error =$this->upload->display_errors();
                        
                        $errorMessage=array();
                        $errorMessage['errMessage']="Your image does't upload!";
                        $this->session->set_userdata($errorMessage);
                        
//                       echo '<pre>';
//                       print_r($error);
                }
                else
                {
                        $fdata = $this->upload->data();
//                        echo '<pre>';
//                        print_r($fdata);
//                        exit();
                        $data['product_image']=$config['upload_path'].$fdata['file_name'];
                }
        
        
//        .............Uploading Image Files Ends..................
//                        echo '<pre>';
//                        print_r($data);
//                        exit();
        $this->Dashboard_Model->saveProductInfo($data);
        
        $confirmationMessage=array();
        $confirmationMessage['message']="Your Product Save Successfully!";
        $this->session->set_userdata($confirmationMessage);
        
        redirect('Dashboard/addProduct');
    }
    public function manageProduct()
    {
        $data=array();
        
        $data['title']="Dashboard | Manage Product";
        $data['selectProduct']=  $this->Dashboard_Model->selectProductInfo();
//        echo '<pre>';
//        print_r($selectProduct);
//        exit();
        $data['adminMainContent']=  $this->load->view('admin/adminPages/manageProduct',$data,TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function unpublishFeatureProduct($product_id)
    {
        $this->Dashboard_Model->selectUnpublishFeatureProduct($product_id);
        
        redirect('Dashboard/manageProduct');
    }
    public function publishFeatureProduct($product_id)
    {
        $this->Dashboard_Model->selectPublishFeatureProduct($product_id);
        
        redirect('Dashboard/manageProduct');
    }
    public function editProduct($product_id)
    {
        $data=array();
        
        $data['title']="Dashboard | Edit Product";
        $data['allPublishCategory']=  $this->Welcome_Model->selectAllPublishCategory();
        $data['allPublishManufacturer']=  $this->Welcome_Model->selectAllPublishManufacturer();
        $data['productInfo']=  $this->Dashboard_Model->productInfoById($product_id);
//        echo '<pre>';
//        print_r($productInfo);
//        exit();
        $data['adminMainContent']=  $this->load->view('admin/adminPages/editProduct',$data,TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function updateProduct()
    {
        if(($_FILES['product_image']['name']== '')||($_FILES['product_image']['name']== NULL)){ 
            $product_id=  $this->input->post('product_id',true); 
            $data= array();
            $data['product_name']=  $this->input->post('product_name',true);
            $data['category_id']=  $this->input->post('category_id',true);
            $data['manufacturer_id']=  $this->input->post('manufacturer_id',true);
            $data['product_price']=  $this->input->post('product_price',true);
            $data['featured_product']=  $this->input->post('featured_product',true);
            $data['previous_product_price']=  $this->input->post('previous_product_price',true);
            $data['product_quantity']=  $this->input->post('product_quantity',true);
            $data['product_short-description']=  $this->input->post('product_short_description',true);
            $data['product_long_description']=  $this->input->post('product_long_description',true);
            $this->Dashboard_Model->updateProductOldImage($data,$product_id);
        }else {
            $product_id=  $this->input->post('product_id',true); 
            $data= array();
            $data['product_name']=  $this->input->post('product_name',true);
            $data['category_id']=  $this->input->post('category_id',true);
            $data['manufacturer_id']=  $this->input->post('manufacturer_id',true);
            $data['product_price']=  $this->input->post('product_price',true);
            $data['featured_product']=  $this->input->post('featured_product',true);
            $data['previous_product_price']=  $this->input->post('previous_product_price',true);
            $data['product_quantity']=  $this->input->post('product_quantity',true);
            $data['product_short_description']=  $this->input->post('product_short_description',true);
            $data['product_long_description']=  $this->input->post('product_long_description',true);
    
            $fdata=array();
            $config['upload_path']='ProductImages/';
            $config['allowed_types']= 'gif|png|jpg';
            $config['max_size']= '50000';
            $config['max_width']='50000';
            $config['max_height']='50000';     
            
            $this->load->library('upload',$config);
            if($this->upload->do_upload('product_image')){
                $fdata=  $this->upload->data();
                $data['product_image']=$config['upload_path'].$fdata['file_name'];
            }   
            $this->Dashboard_Model->updateProductNewImage($data,$product_id);
        }
        $confirmation= array();
        $confirmation['message']="Your Product Update Successfully!";
        $this->session->set_userdata($confirmation);
        
        redirect('Dashboard/addProduct');
    }
    public function deleteProduct($product_id)
    {
        $this->Dashboard_Model->deleteProductById($product_id);
        redirect('Dashboard/manageProduct');
    }
    public function manageOrder()
    {
        $data=array();
        
        $data['title']="Dashboard | Manage Order";
        
        $data['orderInfo']=  $this->Dashboard_Model->selectOrderInfo();
        
//        echo '<pre>';
//        print_r($orderInfo);
//        exit();
        
        $data['adminMainContent']=  $this->load->view('admin/adminPages/manageOrder',$data,TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function viewInvoice($order_id)
    {
         $data=array();
        
        $data['title']="Dashboard | View Invoice";
        
        $data['orderInfo']=  $this->Dashboard_Model->selectOrderInfoById($order_id);
        $customerId=$data['orderInfo']->customer_id;
        $shippingId=$data['orderInfo']->shipping_id;
        $data['customerInfo']=  $this->Dashboard_Model->selectCustomerInfoById($customer_id);
        $data['shippingInfo']=  $this->Dashboard_Model->selectShippingInfoById($shipping_id);
        $data['orderDetailsInfo']=  $this->Dashboard_Model->selectOrderDetailsInfoById($order_id);
        
        $data['adminMainContent']=  $this->load->view('admin/invoice',$data,TRUE);
        $this->load->view('admin/adminMaster',$data);
    }
    public function downloadInvoice($order_id)
    {
        $data=array();
        
        $data['orderInfo']=  $this->Dashboard_Model->selectOrderInfoById($order_id);
        $customer_id=$data['orderInfo']->customer_id;
        $shipping_id=$data['orderInfo']->shipping_id;
        $data['customerInfo']=  $this->Dashboard_Model->selectCustomerInfoById($customer_id);
        $data['shippingInfo']=  $this->Dashboard_Model->selectShippingInfoById($shipping_id);
        $data['orderDetailsInfo']=  $this->Dashboard_Model->selectOrderDetailsInfoById($order_id);
        
        $this->load->helper('dompdf');
        $viewFile= $this->load->view('admin/invoice',$data,TRUE);
        $fileName=  pdf_create($viewFile,'invoice-00'.$order_id);
        echo $fileName;
    }
}
