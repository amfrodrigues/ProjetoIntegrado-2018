<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cwallet extends CI_Controller{
	

	public function index()
	{
		$this->load->view('inicio');
	}
	

	/*-------------------------Alternar de views -------------------------------*/
	public function Particular()
	{
		$this->load->view('index_cliente');
	}
	public function Profissional()
	{
		$this->load->view('index_comerciante');
	}
	public function inic()
	{
		$this->load->view('inicio');
	}

}
?>