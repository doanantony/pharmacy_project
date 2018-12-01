<?php
	function get_active($page){
		$page_name = strtolower($_SERVER["REQUEST_URI"]);
		if (strpos($page_name, $page) !== false) {
		    return 'active';
		}
	}
?>