<?php 

class Mapi extends CI_Model{

  public function getallusers()
  {
        $result = $this->db->query('Select * from Utilizadores');
        return $result->result();
   }
}

?>