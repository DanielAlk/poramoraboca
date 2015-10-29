<?php
class pages_controller extends ApplicationController {
	protected $before_actions = array(
		array('detect_mobile')
		);

	protected function home() {}
	
	protected function management() {}
	
	protected function proposal() {}

	protected function schedule() {}

	protected function community() {}

}
?>