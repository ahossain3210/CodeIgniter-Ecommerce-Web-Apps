<?php

class Admin_Model extends CI_Model{
    
    public function adminLoginCheckInfo($admin_email,$admin_password)
    {
//        echo 'in model';
//        exit();
//     
        $admin_password=  md5($admin_password);
        $this->db->select('*')
                ->from('tbl_admin')
                ->where('admin_email',$admin_email)
                ->where('admin_password',$admin_password);
        $query_result=  $this->db->get();
        $result=$query_result->row();
//        
//        echo'<pre>';
//        print_r($result);
//        exit();
        return $result;
    }
}
