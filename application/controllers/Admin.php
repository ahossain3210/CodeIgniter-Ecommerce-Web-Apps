<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
   
    
    public function __construct() {
        parent::__construct();
        $admin_id=  $this->session->userdata('admin_id');
        if($admin_id!==NULL)
        {
            redirect('Dashboard');
        }
    }
    
    
    public function index()
    {
        $data=array();
        
//        session_start();
//        session_destroy();
        
        $data['title']="Admin Login | E-shopper";
        $this->load->view('admin/adminLogin',$data);
    }
    public function adminLoginCheck()
    {
        $data=array();
        
        $data['title']="Dashboard";
        
        $admin_email=  $this->input->post('admin_email',TRUE);
        $admin_password= $this->input->post('admin_password',TRUE);
//        
//        echo '<pre>';
//        
//        print_r($_POST);
//        exit();
        
//        $this->load->model('admin_model');
        $result=$this->Admin_Model->adminLoginCheckInfo($admin_email,$admin_password);
        if($result)
        {
            $showProfileName=array();
            $showProfileName['admin_name']=$result->admin_name;
            $showProfileName['admin_id']=$result->admin_id;
            $showProfileName['access_level']=$result->access_level;
            
            
            $this->session->set_userdata($showProfileName);
            
            redirect('dashboard');
        }
         else {
                $confirmationMessage=array();
                $confirmationMessage['message']="Your Email or Password Incorrect!";
                $this->session->set_userdata($confirmationMessage);
                
                
                
                redirect('admin/index');

                
         }

        
    }
}
