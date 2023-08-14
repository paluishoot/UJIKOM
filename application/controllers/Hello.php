<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hello extends CI_Controller
{
	
	public function index()
	{
		echo "Hello Perkenalkan saya Ihksan";
	}
	public function hello_C030320125()
	{
		$this->load->model('Hello_model');
		$data = $this->Hello_model->Hello_C030320125();
		echo $data;
	}
	public function hello_view()
	{
		$this->load->view('hello_view');
	}
	public function hello_mvc()
	{
		$this->load->model('Hello_model');
		$data['mvc']=$this->Hello_model->hello_mvc();
		$this->load->view('hello_view', $data);
	}
}