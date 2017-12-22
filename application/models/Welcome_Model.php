<?php

class Welcome_Model extends CI_Model {
    
    public function selectAllPublishCategory()
    {
        $this->db->select('*')
                ->from('tbl_category')
                ->where('publication_status',1);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
        
        return $result;
    }
    public function selectAllPublishManufacturer()
    {
        $this->db->select('*')
                ->from('tbl_manufacturer')
                ->where('publication_status',1);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_m_product_info($mid)
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->where('manufacturer_id',$mid)
                ->order_by('product_id','DESC')
                ->limit(3);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_c_manufacturer_info($ci)
    {
        $this->db->select('*')
                ->from('tbl_manufacturer')
                ->where('category_id',$ci);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    
    public function selectCategoryManufacturer()
    {
        $this->db->select('*')
                ->from('tbl_manufacturer')
                ->where('category_id',2);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_computer_category_manufacturer()
    {
        $this->db->select('*')
                ->from('tbl_manufacturer')
                ->where('category_id',9);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_tel_category_manufacturer()
    {
        $this->db->select('*')
                ->from('tbl_manufacturer')
                ->where('category_id',12);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_elec_category_manufacturer()
    {
        $this->db->select('*')
                ->from('tbl_manufacturer')
                ->where('category_id',11);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function selectLatestProduct()
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->order_by('product_id','DESC')
                ->limit(5);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_new_product()
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->order_by('product_id','DESC')
                ->limit(15);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_all_mobile_info()
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->where('category_id',2)
                ->limit(15);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
//    public function selectViewProduct()
//    {
//        $this->db->select('*')
//                ->from('tbl_product');
////                ->limit(10);
//        $query_result=  $this->db->get();
//        $result=$query_result->result();
//        
//        return $result;
//    }
    public function selectViewProduct($per_page,$offset)
    {
        if ($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*')
                ->from('tbl_product')
                ->limit($per_page,$offset);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function selectFeaturedProduct()
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->where('featured_product','featured')
                ->order_by('product_id','DESC')
                ->limit(5);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_all_feature_products_info()
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->where('featured_product','featured');
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_computer_info()
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->where('category_id', 9)
                ->order_by('product_id','DESC')
                ->limit(5);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_all_ocomputer_info()
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->where('category_id', 9)
                ->limit(15);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }

    public function viewCategoryProductById($category_id)
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->where('tbl_product.category_id',$category_id);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function viewManufacturerProductById($manufacturer_id)
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->join('tbl_manufacturer','tbl_manufacturer.manufacturer_id=tbl_product.manufacturer_id')
                ->where('tbl_product.manufacturer_id',$manufacturer_id);
        
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
        
        return $result;
    }
    public function viewManufacturerNameById($manufacturer_id)
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->join('tbl_manufacturer','tbl_manufacturer.manufacturer_id=tbl_product.manufacturer_id')
                ->where('tbl_product.manufacturer_id',$manufacturer_id);
        
        $query_result=  $this->db->get();
        $result=$query_result->row();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
        
        return $result;
    }

    public function viewProductCategoryById($category_id)
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->join('tbl_category','tbl_category.category_id=tbl_product.category_id')
                ->where('tbl_product.category_id',$category_id);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        
        return $result;
    }

    public function productInfoById($product_id)
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->join('tbl_category','tbl_category.category_id=tbl_product.category_id')
                ->join('tbl_manufacturer','tbl_manufacturer.manufacturer_id=tbl_product.manufacturer_id')
                ->where('tbl_product.product_id',$product_id);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        
        return $result;
    }
    public function viewRelatedPorductInfoById($category_id)
    {
        $this->db->select('*')
                ->from('tbl_category')
                ->join('tbl_product','tbl_product.category_id=tbl_category.category_id')
                ->where('tbl_category.category_id',$category_id)
                ->limit(10);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_search_item_info($search_item)
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->where("product_name Like '%$search_item%'") ;
//                ->LIKE('productName','%$search_item%');
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function select_mobile_info()
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->where('category_id',2) ;
        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
    public function save_customer_message_info()
    {
        $data=array();
        
        $data['c_name']=  $this->input->post('c_name');
        $data['c_email']=  $this->input->post('c_email');
        $data['c_message']=  $this->input->post('c_message');
        
//        echo '<pre>';
//        print_r($data);
//        exit();
        
        $this->db->insert('tbl_message',$data);
        
    }

}
