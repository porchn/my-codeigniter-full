<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Active template
|--------------------------------------------------------------------------
|
| The $template['active_template'] setting lets you choose which template 
| group to make active.  By default there is only one group (the 
| "default" group).
|
*/
$template['active_template'] = 'default';
$template['template_dir'] = 'template';
/*
|--------------------------------------------------------------------------
| Explaination of template group variables
|--------------------------------------------------------------------------
|
| ['template'] The filename of your master template file in the Views folder.
|   Typically this file will contain a full XHTML skeleton that outputs your
|   full template or region per region. Include the file extension if other
|   than ".php"
| ['regions'] Places within the template where your content may land. 
|   You may also include default markup, wrappers and attributes here 
|   (though not recommended). Region keys must be translatable into variables 
|   (no spaces or dashes, etc)
| ['parser'] The parser class/library to use for the parse_view() method
|   NOTE: See http://codeigniter.com/forums/viewthread/60050/P0/ for a good
|   Smarty Parser that works perfectly with Template
| ['parse_template'] FALSE (default) to treat master template as a View. TRUE
|   to user parser (see above) on the master template
|
| Region information can be extended by setting the following variables:
| ['content'] Must be an array! Use to set default region content
| ['name'] A string to identify the region beyond what it is defined by its key.
| ['wrapper'] An HTML element to wrap the region contents in. (We 
|   recommend doing this in your template file.)
| ['attributes'] Multidimensional array defining HTML attributes of the 
|   wrapper. (We recommend doing this in your template file.)
|
| Example:
| $template['default']['regions'] = array(
|    'header' => array(
|       'content' => array('<h1>Welcome</h1>','<p>Hello World</p>'),
|       'name' => 'Page Header',
|       'wrapper' => '<div>',
|       'attributes' => array('id' => 'header', 'class' => 'clearfix')
|    )
| );
|
*/

/*
|--------------------------------------------------------------------------
| Default Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/
$template['default']['template'] = $template['template_dir'].'/default/index';
$template['default']['template_core'] = '';
$template['default']['regions'] = array(
	'header',
	'sidebar',
    'content',
    'footer'
);
$template['default']['regions_map'] = '';
$template['default']['parser'] = 'parser';
$template['default']['parser_method'] = 'parse';
$template['default']['parser_template'] = FALSE;
$template['default']['css'] = array();
$template['default']['js'] = array();
$template['default']['doctype'] = 'html5';
$template['default']['use_favicon'] = FALSE;
$template['default']['favicon_location'] = '';
$template['default']['meta_content'] = 'UTF-8';
$template['default']['meta_language'] = 'en-US';
$template['default']['meta_author'] = '';
$template['default']['meta_description'] = '';
$template['default']['meta_keywords'] = '';
$template['default']['body_id'] = '';
$template['default']['title'] = '';

/*
|--------------------------------------------------------------------------
| Main Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/
$template['main']['template'] = 'template/main/index';
$template['main']['template_core'] = 'index';
$template['main']['regions'] = array();
$template['main']['regions_map'] = 'main';
$template['main']['parser'] = 'parser';
$template['main']['parser_method'] = 'parse';
$template['main']['parser_template'] = FALSE;
$template['main']['css'] = array();
$template['main']['js'] = array(
		array(url_site_vendor_url('jquery/jquery-1.9.0.js'), 'js_view'),
		array(url_site_vendor_url('jquery/jquery-migrate-1.1.1.min.js'), 'js_view')
	);
$template['main']['doctype'] = 'html5';
$template['main']['use_favicon'] = FALSE;
$template['main']['favicon_location'] = '';
$template['main']['meta_content'] = 'UTF-8';
$template['main']['meta_language'] = 'en-US';
$template['main']['meta_author'] = '';
$template['main']['meta_description'] = 'Samart codeigniter engine';
$template['main']['meta_keywords'] = 'Samart,codeigniter,engine';
$template['main']['body_id'] = '';
$template['main']['title'] = '';

/* End of file template.php */
/* Location: ./system/application/config/template.php */