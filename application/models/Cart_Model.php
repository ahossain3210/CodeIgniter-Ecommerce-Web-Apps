<?php


class Cart_Model extends CI_Model{
    
    public function seleceProductInfoById($product_id)
    {
        $this->db->select('*')
                ->where('product_id',$product_id)
                ->from('tbl_product');
        $query= $this->db->get();
        $result=$query->row();
        return $result;
    }
}
