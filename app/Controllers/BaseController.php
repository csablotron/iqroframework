<?php

namespace App\Controllers;

use System\Uri as Uri;

class BaseController
{
	protected $container;

	public function __construct($container)
	{
		$this->container = $container;
	}

	public function __get($property)
	{
		if($this->container->{$property}){
			return $this->container->{$property};
		}
	}

	public function getUri($id, $request)
	{
		return Uri::segment($id, $request);
	}
}