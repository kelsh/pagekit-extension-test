<?php

namespace Pagekit\helloWorld\Controller;

use Pagekit\Application as App;



class helloWorldController{
	
	public function indexAction(){
		$module = App::module('helloWorld');
		$config = $module->config;
		$user = App::user();

		if($user->inAnonymous()){
			return "User is Anonymous";
		}

		return [
			'$view'  => [
			'title' => '$view->title',
			'name' => 'helloWorld:views/admin/index.php'
		
			],
			'message' => "is the message property built in or arbitrary?",
			'itDoesntMatter' => "It doesn't matter i guess",
				'config' => $config['configSettings']
		];
	}

}