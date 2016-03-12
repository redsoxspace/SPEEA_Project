<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->view('page/home');
	}

	public function contact()
	{
		$this->load->view('header/header');
		$this->load->view('page/contact_us');
	}

	public function join()
	{
		$this->load->view('header/header');
		$this->load->view('page/join');
	}
}
