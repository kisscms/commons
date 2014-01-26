<?php


//===============================================
// Configuration
//===============================================

if( class_exists('Config') && method_exists(new Config(),'register')){ 

	// Register variables
	Config::register("commons", "css", "http://cdn.kdi.co/css/common/0.7.0/common.min.css");
	Config::register("commons", "js", "http://cdn.kdi.co/js/common/0.4.0/common-min.js");

}

?>
