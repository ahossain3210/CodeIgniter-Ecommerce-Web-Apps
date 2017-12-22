<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller{
    
    public function addToCart()
    {
        $product_id=  $this->input->post('product_id');
        $qty=  $this->input->post('qty'); 
        $productInfo=$this->Cart_Model->seleceProductInfoById($product_id);
//        echo '<pre>';
//        print_r($productInfo);
//        exit();
        $data=array(
            'id' =>$productInfo->product_id,
            'qty' =>$qty,
            'price' =>$productInfo->product_price,
            'name' =>$productInfo->product_name,
            'image' =>$productInfo->product_image
        );
        
        $this->cart->insert($data);
        redirect('cart');
    }
    public function viewCart()
    {
        $data=array();
        
        $data['title']="Cart | E-shopper";
        
        $data['categories']=TRUE;
//        $data['wishList']=TRUE;
        $data['newProducts']=TRUE;
//        $data['popularArticles']=TRUE;

        $data['allPublishManufacturer']=  $this->Welcome_Model->selectAllPublishManufacturer();
        
        $data['contents']=  $this->cart->contents();
        
        $contents=  $this->cart->contents();
        
        if($contents==NULL)
        {
            $data['mainContent']=  $this->load->view('pages/empty_cart',$data,TRUE);
            $this->load->view('master',$data);
        }
     else {
            $data['contents']=$contents;
            $data['mainContent']=  $this->load->view('pages/viewCart',$data,TRUE);
            $this->load->view('master',$data);
     }
        
        
    }
    public function updateCart()
    {
        $qty=$this->input->post('qty');
//        echo '<br>';
        $rowId=$this->input->post('rowId');
        $data=array(
            'rowid' =>$rowId,
            'qty' =>$qty
        );
        $this->cart->update($data);
        redirect('cart');
    }
    public function deleteCart($rowid)
    {
        $data=array(
            'rowid' =>$rowid,
            'qty' =>0
        );
        $this->cart->update($data);
        redirect('cart');
    }
    public function removeWishlist($rowid)
    {
        $data=array(
            'rowid' =>$rowid,
            'qty' =>0
        );
        $this->cart->update($data);
        redirect('Checkout/customerRegistration');
    }
}
