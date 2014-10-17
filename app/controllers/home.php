<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('product_model','mProduct');
	}
	
	public function index()
	{
		$this->template->set_template('main');
		$this->mProduct->getProduct();
		$this->template->render();
	}
}