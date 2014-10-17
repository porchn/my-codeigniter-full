<?php
//require APPPATH.'ext/Instagram/instagram.class.php';

require APPPATH.'libraries/ext/Instagram/instagram.class.php';
//
class InstagramAPI extends InstagramLib{
	public function __construct(){
		$this->CI = & get_instance();
		$config = $this->CI->config->load('instagram');
		parent::__construct($config);
	}
}
?>