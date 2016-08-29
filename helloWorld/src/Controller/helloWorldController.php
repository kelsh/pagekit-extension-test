<?php

namespace Pagekit\helloWorld\Controller;

use Pagekit\Application as App;



class helloWorldController{
	
	public function indexAction(){
		$module = App::module('helloWorld');
		$config = $module->config;
		$user = App::user();

		/*if($user->hasRole(1)){
			return "User is Anonymous";
		}else{
			dump($user);
		}*/

		return [
			dump($user),
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