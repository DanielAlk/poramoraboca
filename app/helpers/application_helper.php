<?php
# You can create as many helpers as you want, all of them will be initiated everytime.
# Helpers wont be available like an object such as: $some_helper->method.
# instead its just initiated, so you must define methods inside the __contruct function.
class application_helper {
	
	public function __construct() {
	
		$GLOBALS['extra_js'] = '';
		
		function scroll_bar($page, $in_modal = false) {
			include 'shared/_scroll_bar.php';
		}
	
	}
	
}
?>