<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//require APPPATH."libraries/ext/template_lib".EXT;
class Instagram extends MY_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->library('InstagramAPI');
//		var_dump($this->instagramapi->searchUser('godsids'));
		var_dump($this->instagramapi->getPopularMedia());
	}
}