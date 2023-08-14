<?php
defined('BASEPATH') or exit ('No direct script access allowed');
/**
 * 
 */
class halaman_utama extends CI_Controller
{
	public function index()
	{
		$this->load->view('halaman_utama_v');
	}
}