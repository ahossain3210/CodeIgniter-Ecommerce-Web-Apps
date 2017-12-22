<?php


class Dashboard_Model extends CI_Model{
    
    public function saveCategoryInfo($data)
    {
        $this->db->insert('tbl_category',$data);
    }
    public function selectAllCategoryInfo()
    {
        $this->db->select('*')
                 ->from('tbl_category');
        $query_result=  $this->db->get();
        $result=$query_result->result();
        return $result;
        
    }
    public function unpublishCategoryById($category_id)
    {
        $this->db->set('publication_status',0)
                ->where('category_id',$category_id)
                ->update('tbl_category');
                
    }
    public function publishCategoryById($category_id)
    {
        $this->db->set('publication_status',1)
                ->where('category_id',$category_id)
                ->update('tbl_category');
                
    }
    public function deleteCategoryById($category_id)
    {
        $this->db->where('category_id',$category_id)
                ->delete('tbl_category');
                
    }
    public function selectEditCategoryInfoById($category_id)
    {
        $this->db->select('*')
                ->from('tbl_category')
                ->where('category_id',$category_id);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function updateCategoryInfo($data,$category_id)
    {
        $this->db->where('category_id',$category_id)
                ->update('tbl_category',$data);
    }
    public function saveBlogInfo($data)
    {
        $this->db->insert('tbl_blog',$data);
    }
    public function selectAllBlogInfo()
    {
        $this->db->select('*')
                ->from('tbl_blog');
        $query_result=  $this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function unpublishBlogById($blog_id)
    {
        $this->db->set('publication_status',0)
                ->where('blog_id',$blog_id)
                ->update('tbl_blog');
    }
    public function publishBlogById($blog_id)
    {
        $this->db->set('publication_status',1)
                ->where('blog_id',$blog_id)
                ->update('tbl_blog');
    }
    public function deleteBlogById($blog_id)
    {
        $this->db->where('blog_id',$blog_id)
                ->delete('tbl_blog');
    }
    public function selectBlogInfoById($blog_id)
    {
        $this->db->select('*')
                ->from('tbl_blog')
                ->where('blog_id',$blog_id);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        return $result;
                
    }
    public function updateBlogInfo($data,$blog_id)
    {
        $this->db->where('blog_id',$blog_id)
                ->update('tbl_blog',$data);
    }
    /*............Manufacturer ...................*/
    
    public function saveManufacturerInfo($data)
    {
        $this->db->insert('tbl_manufacturer',$data);
    }
    public function selectManufacturerInfo()
    {
        $this->db->select('*')
                ->from('tbl_manufacturer')
                ->join('tbl_category','tbl_category.category_id=tbl_manufacturer.category_id');
        $query_result=  $this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function publishManufacturerById($manufacturer_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer');
    }
    public function unpublishManufacturerById($manufacturer_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer');
    }
    public function manufacturerInfoById($manufacturer_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('manufacturer_id',$manufacturer_id);
        $query_result=  $this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function updateManufacturerOldImage($data,$mid)
    {
        $this->db->where('manufacturer_id',$mid)
                 ->update('tbl_manufacturer',$data);
    }
    public function updateManufacturerNewImage($data,$mid)
    {
        $this->db->select('*')
                 ->where('manufacturer_id',$mid)
                 ->from('tbl_manufacturer');
        $query=$this->db->get();
        $result=$query->row();
        $image=$result->manufacturer_image;
        unlink($image);
        $this->db->where('manufacturer_id',$mid)
                 ->update('tbl_manufacturer',$data);
    }
    public function deleteManufacturerById($manufacturer_id)
    {
        $this->db->select('*')
                 ->where('manufacturer_id',$manufacturer_id)
                 ->from('tbl_manufacturer');
        $query_result=  $this->db->get();
        $result=$query_result->row();
        $image=$result->manufacturer_image;
        unlink($image);
        $this->db->where('manufacturer_id',$manufacturer_id)
                 ->delete('tbl_manufacturer');
    }
    
     /*............Products ...................*/
    
    public function saveProductInfo($data)
    {
        $this->db->insert('tbl_product',$data);
    }
    public function selectProductInfo()
    {
        $this->db->select('*')
                ->from('tbl_product')
                ->join('tbl_category','tbl_category.category_id=tbl_product.category_id')
                ->join('tbl_manufacturer','tbl_manufacturer.manufacturer_id=tbl_product.manufacturer_id');
        $query_result= $this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function selectUnpublishFeatureProduct($product_id)
    {
        $this->db->set('featured_product','unfeatured')
                ->where('product_id',$product_id)
                ->update('tbl_product');
    }
    public function selectPublishFeatureProduct($product_id)
    {
        $this->db->set('featured_product','featured')
                ->where('product_id',$product_id)
                ->update('tbl_product');
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
    public function updateProductOldImage($data,$product_id)
    {
        $this->db->where('product_id',$product_id)
                ->update('tbl_product',$data);
    }
    public function updateProductNewImage($data,$product_id)
    {
        $this->db->select('*')
                 ->where('product_id',$product_id)
                 ->from('tbl_product');
        $query=$this->db->get();
        $result=$query->row();
        $image=$result->product_image;
        unlink($image);
        $this->db->where('product_id',$product_id)
                 ->update('tbl_product',$data);
    }
    public function deleteProductById($product_id)
    {
        $this->db->where('product_id',$product_id)
                 ->delete('tbl_product');
    }
    public function selectOrderInfo()
    {
        $this->db->select('*')
                ->from('tbl_order')
                ->join('tbl_customer','tbl_customer.customer_id=tbl_order.customer_id')
                ->join('tbl_payment','tbl_payment.payment_id=tbl_order.payment_id')
                ->join('tbl_order_details','tbl_order_details.order_id=tbl_order.order_id');

        $query_result=  $this->db->get();
        $result=$query_result->result();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
        
        return $result;
        
        
    }
    public function selectOrderInfoById($order_id)
    {
         $this->db->select('*')
                ->from('tbl_order')
                ->where('order_id',$order_id);

        $query_result=  $this->db->get();
        $result=$query_result->row();
        
        return $result;
    }
    public function selectCustomerInfoById($customer_id)
    {
         $this->db->select('*')
                ->from('tbl_customer')
                ->join('tbl_billing','tbl_billing.customer_id=tbl_customer.customer_id')
                ->where('tbl_customer.customer_id',$customer_id);

        $query_result=  $this->db->get();
        $result=$query_result->row();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
        return $result;
    }
    public function selectShippingInfoById($shipping_id)
    {
         $this->db->select('*')
                ->from('tbl_shipping')
                ->where('shipping_id',$shipping_id);

        $query_result=  $this->db->get();
        $result=$query_result->row();
        
        return $result;
    }
    public function selectOrderDetailsInfoById($order_id)
    {
        $this->db->select('*')
                ->from('tbl_order_details')
                ->where('order_id',$order_id);

        $query_result=  $this->db->get();
        $result=$query_result->result();
        
        return $result;
    }
}
