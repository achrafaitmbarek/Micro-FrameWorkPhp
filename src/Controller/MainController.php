<?php

namespace App\Controller;

use Plugo\Controller\AbstractController;

class MainController extends AbstractController {

	public function home() {
		return $this->renderView('main/home.php', [
			'seo' => [
				'title' => 'Accueil',
				'description' => 'Plugo est un micro framework PHP blablabla...',
			]
		]);
	}

	public function contact() {
		return $this->renderView('main/contact.php', [
			'title' => 'Contact'
		]);
	}

}