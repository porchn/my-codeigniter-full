<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends MY_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function setProduct()
	{
		var_dump("setProduct");
	}

	public function getProduct()
	{
		var_dump("getProduct");
	}
}