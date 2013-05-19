<?php

define('WP_THEME_PATH', dirname(dirname(__FILE__)));
define('WP_SMARTY_PATH', dirname(__FILE__));

require(WP_THEME_PATH.'/libs/smarty/distribution/libs/Smarty.class.php');

class WpSmarty extends Smarty {
	function __construct() {
		parent::__construct();
		$this->template_dir = WP_SMARTY_PATH.'/templates';
		$this->compile_dir  = WP_SMARTY_PATH.'/templates_c';
		$this->config_dir   = WP_SMARTY_PATH.'/configs';
		$this->cache_dir    = WP_SMARTY_PATH.'/cache';
		$this->plugins_dir  = array(WP_SMARTY_PATH.'/plugins', WP_SMARTY_PATH.'/wp_functions');

		$this->force_compile = false;
		$this->debugging = false;
		$this->caching = false;
		$this->cache_lifetime = 10;
        
        $this->assign( "globals", $GLOBALS );
	}
}
