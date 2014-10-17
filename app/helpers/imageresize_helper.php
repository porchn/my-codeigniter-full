<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('imageResize')) 
{
	function imageResize($url='',$width=100,$height=100)
	{
		//return null;

    	$CI =&get_instance();
     	$CI->load->library('wideimage/WideImage'); // load library 
     	$base_dir=substr($CI->config->item('base_dir'), 0, -1);
		//$imageUrl = base_url($url);

		if($url==""){
			//$url="/ud/default/doctor_default.jpg";
			
			if($width<110){
				$url="/ud/default/doctor_default.jpg";
			}else{
				$url="/ud/default/default_Horo.jpg";
			}
			
		}

     	$imageUrl=$url;
     	//$original_img="http://ho.files-media.com".$url;
     	$original_img=$CI->config->item('medie_dir').$url;

     	//var_dump($original_img);

     	/*
     	if(!file_exists($original_img)){
     		if($width<110){
     			$original_img=$CI->config->item('medie_dir')."/ud/default/doctor_default.jpg";
     		}else{
     			$original_img=$CI->config->item('medie_dir')."/ud/default/default_Horo.jpg";
     		}
     	}
     	*/


		$imageName = basename($imageUrl);
     	$imageInfo=pathinfo($imageUrl);

		$imageName=$imageInfo['filename']."-c-".$width."x".$height.".".$imageInfo['extension'];
		$imagepath = $CI->config->item('media_url').$imageInfo['dirname'].'/';
		$resizePart= $CI->config->item('medie_dir').$imageInfo['dirname'].'/';
		$resizeUrl= $imagepath.$imageName;
		$resizeImage=$resizePart.$imageName;



		if(@getimagesize($resizeImage) && !isset($_GET['sync'])){
			//var_dump($resizeUrl);			
			return $resizeUrl;
		}else{
			if(!file_exists($resizePart)){

				//var_dump("expression01");

				if (!mkdir($resizePart, 0777, true)){
					//var_dump($resizePart);
					die('Failed to create folders...');
				}else{
					$CI->wideimage->load($original_img)->resize($width, $height,'outside')->crop("center","center",$width,$height)->saveToFile($resizeImage);
					return $resizeUrl;
				}
			}else{

				//var_dump("expression02");

				if(@getimagesize($original_img)){
					$CI->wideimage->load($original_img)->resize($width, $height,'outside')->crop("center","center",$width,$height)->saveToFile($resizeImage);
					return $resizeUrl;
				}else{
					//$resizeImage="farms/onderhoudsspray.jpg";
					//$url="/ud/default/doctor_default.jpg";

					if($width<110){
						$url="/ud/default/doctor_default.jpg";
					}else{
						$url="/ud/default/default_Horo.jpg";
					}


					$imageUrl = $url;

     				$original_img="http://ho.files-media.com".$url;
					$imageInfo=pathinfo($imageUrl);
					$imageName=$imageInfo['filename']."-c-".$width."x".$height.".".$imageInfo['extension'];

					$imagepath = $CI->config->item('media_url').$imageInfo['dirname'].'/';
					$resizePart= $CI->config->item('medie_dir').$imageInfo['dirname'].'/';
					$resizeUrl= $imagepath.$imageName;
					$resizeImage=$resizePart.$imageName;
					if(!file_exists($resizePart)){
						if (!mkdir($resizePart, 0777, true)){
						    die('Failed to create folders...');
						}else{
							$CI->wideimage->load($original_img)->resize($width, $height,'outside')->crop("center","center",$width,$height)->saveToFile($resizeImage);
							return $resizeUrl;
						}
					}else{
						$CI->wideimage->load($original_img)->resize($width, $height,'outside')->crop("center","center",$width,$height)->saveToFile($resizeImage);
						return $resizeUrl;
					}
				}
			}
		}
	}
}
