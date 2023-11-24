<?php

const ROUTES = [
	'/' => [
		'controller' => App\Controller\MainController::class,
		'method' => 'home',
		'name' => 'app_index'
	],
	'/contact' => [
		'controller' => App\Controller\MainController::class,
		'method' => 'contact',
		'name' => 'app_contact'
	],
	'/formations/{id}' => [
		'controller' => App\Controller\CourseController::class,
		'method' => 'show',
		'name' => 'course_show'
	]
];