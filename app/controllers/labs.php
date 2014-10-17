<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Labs extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function testDebug()
	{
		$debugVar = array(
			'nickname' => 'Lek',
			'firstname' => 'Rungsun',
			'lastname' => 'Somamat',
			'email' => 'rungsunsomanat@gmail.com',
			'avatar' => array(
					0 => array('title' => 'img1'),
					1 => array('title' => 'img2')
				)
		);
		Kint::dump($debugVar);
	}

}