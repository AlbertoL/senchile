<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Areas extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->layout->setLayout("frontend");
	}
	public function index()
	{
		$this->layout->view('index');
	}
	public function add()
	{
		$this->layout->view('add');
	}
	
}