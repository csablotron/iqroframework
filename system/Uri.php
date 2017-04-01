<?php

namespace System;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Uri
{
	public static function segment($id, $request)
	{
		$uri = $request->getUri()->getPath();
		$urisegment = explode('/', $uri);
		return $urisegment[$id];
	}
}