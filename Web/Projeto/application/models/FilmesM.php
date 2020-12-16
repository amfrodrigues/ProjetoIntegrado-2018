<?php

class FilmesM extends CI_Model
{
	
	function getALLDisplayble()
	{
		$this->db->select('id,titulo,descricao,foto');
		$result = $this->db->get('filmes');
		return $result->result();
	}
	/*

	function getOneMovie($id)
	{
	$this->db->select('*');
	$result = $this->db->get_where('filmes', array('id' => $id));
	return $result->row();
	}*/
}

?>