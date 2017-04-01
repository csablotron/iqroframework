<?php

namespace App\Controllers;

class HomeController extends BaseController
{

	public function index($request, $response)
	{
		
		$views = [
			'title' => 'Home Sample',
			'css' => [
				'packages/bootstrap/css/bootstrap.min.css',
				'assets/style.css'
			],
			'js' => [
				'assets/js/jquery.min.js'
			]
		];

		return $this->view->render($response, 'home.twig', $views);

	}
}