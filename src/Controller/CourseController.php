<?php

namespace App\Controller;

use Plugo\Controller\AbstractController;
use App\Manager\CourseManager;

class CourseController extends AbstractController {

	public function show($id) {
		$courseManager = new CourseManager();
		return $this->renderView('course/show.php', [
			'course' => $courseManager->find($id)
		]);
	}

}