<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('frontend/index');
	}
	public function pages($pname)
	{
		$this->load->view('frontend/pages/' . $pname);
	}
	public function softwareprogramming($pname)
	{
		$this->load->view('frontend/software-programming/' . $pname);
	}
	public function product($pname)
	{
		$this->load->view('frontend/software-product/' . $pname);
	}
	public function products($pname)
	{
		$this->load->view('frontend/products/' . $pname);
	}
	public function product_purchase()
	{
		$this->load->view('frontend/products/payment');
	}
	public function blog($pname)
	{
		$this->load->view('frontend/blog/' . $pname);
	}

	public function product_purchase_link()
	{
		$this->load->view('frontend/products/make-payment', $_POST);
	}
}
