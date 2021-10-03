<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;

        $router->addRoute('<presenter>/', 'Homepage:default');
        $router->addRoute('<presenter>/<path>/', 'Gallery:default');
        $router->addRoute('<presenter>/<width>/<height>/<fullpath>', 'Images:default');
		return $router;
	}
}
