<?php

class Mailer_Model extends CI_Model {
    
    public function sendEmail($data,$templateName)
    {
//        echo $templateName;
//        
//        echo "<pre>";
//        print_r($data);
//        exit();
        
        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($data['fromEmail'],$data['adminFullName']);
        $this->email->to($data['toEmail']);
        $this->email->subject($data['subject']);
        $body=  $this->load->view('mailScript/'.$templateName,$data,TRUE);
        
        echo $body;
        exit();
        
        $this->email->message($body);
//        $this->email->send();
        $this->email->clear();
    }
}
