<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if( !function_exists('hashing_dir') ) 
{
	function hashing_dir($id = NULL, $base_path = NULL)
	{
		if( is_null($id) || is_null($base_path) )
			return '';
		
		$path = $base_path.'/'.ceil($id/9000000).'/'.ceil($id/3000).'/'.$id;
		if(create_dir($path))
			return $path;
		else
			return ;
	}
}

if( !function_exists('create_dir') )
{
	function create_dir($path, $permission = 0777, $recursive = TRUE)
	{
		if( is_dir($path) )
			return $path; 
		
		$create_dir = mkdir($path, $permission, $recursive);
		if( !$create_dir )
			return FALSE;
		
		return $create_dir;
	}
}