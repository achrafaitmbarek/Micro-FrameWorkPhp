<?php

namespace App\Manager;

use Plugo\Manager\AbstractManager;
use App\Entity\Course;

class CourseManager extends AbstractManager {

	public function find(int $id): mixed {
		return $this->readOne(Course::class, ['id' => $id]);
	}

}