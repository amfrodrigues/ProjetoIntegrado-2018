<?php 
  
class Capi extends CI_Controller{
    
    public function getallusers(){
          
          $this->load->model('Mapi');
          $myjson = $this->Mapi->getallusers();
          echo json_encode($myjson);
    }

}


?>