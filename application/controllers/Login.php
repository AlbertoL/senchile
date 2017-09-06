<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->layout->setLayout("base");
	}
	public function index()
	{
		$this->layout->view('index');
	}	
}