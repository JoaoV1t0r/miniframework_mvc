<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'IndexControllers',
			'action' => 'index'
		);

		$this->setRoutes($routes);
	}

}
