<?php

namespace App\Controllers;

class HomeController extends BaseController
{

	public function index($request, $response)
	{
		
		$views = [
			'title' => 'Home Sample',
			'css' => [
				'resources/packages/bootstrap/css/bootstrap.min.css',
				'assets/css/style.css'
			],
			'js' => [
				'assets/js/jquery.min.js'
			],
			'db' => $this->db->table('users')->find(1)
		];

		
		return $this->view->render($response, 'home.twig', $views);

	}
}