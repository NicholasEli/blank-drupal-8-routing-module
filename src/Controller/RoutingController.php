<?php

namespace Drupal\custom\Controller;

class RoutingController {
	public function home(){
		return array(
			'#title' => 'Home',
			'#theme' => 'home_page'
		);
	}
}

