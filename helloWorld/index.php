<?php

use Pagekit\Application;
use Pagekit\Auth\AuthEvents;
use Pagekit\Database\Events;

// packages/pagekit/helloWorld/index.php
  // array of namespaces to autoload from given folders

$blah = "whaaaaatttt?";

function(){
    
    if($app){
        $blah = 'returned true';
    }
    else {
        $blah = 'returned false';
    }
};

return [

    'name' => 'helloWorld',

    'type' => 'extension',

    // called when Pagekit initializes the module
    'main' => function (Application $app) {

    },
    'permissions' => [
        'support: new ticket' => [
            'title' => 'Create new support tickets'
        ],
        'support: manage tickets' => [
            'title' => 'Manage support tickets'
        ]
    ],
    'autoload' => [
        'Pagekit\\helloWorld\\' => 'src'
    ],
     'routes' => [
         'support' => [
             "path"=>'/support',
             'controller'=>'Pagekit\\helloWorld\\Controller\\supportTicketController'
         ],
        // identifier to reference the route from your code
        'helloWorld' => [
            // which path this extension should be mounted to
            'path' => '/helloWorld',
            // which controller to mount
            'controller' => 'Pagekit\\helloWorld\\Controller\\helloWorldController'
        ],

    ],
    'resources' => [
    	'helloWorld:' => '',
        'supportTicket:' => '',
    ],
    'config' => [
        'configSettings' => [
            'configOne' => 'wakka wakka',
            'configTwo' => 'flakka flakka',
        ]
    ],
    'menu' => [
    	'helloWorld' => [
    		'label' => 'Sloth',
    		'icon' => 'app\system\assets\images\sloth_dribbble.png',
    		'url' => '@helloWorld'
    	],
        'helloWorld2' => [
            'label' => 'Sloth',
            'icon' => 'app\system\assets\images\sloth_dribbble.png',
            'url' => '@helloWorld'
        ],
        'helloWorld3' => [
            'label' => 'Sloth',
            'icon' => 'app\system\assets\images\sloth_dribbble.png',
            'url' => '@helloWorld'
        ],
        'helloWorld4' => [
            'label' => 'Sloth',
            'icon' => 'app\system\assets\images\sloth_dribbble.png',
            'url' => '@helloWorld'
        ],
        'helloWorld5' => [
            'label' => 'Sloth',
            'icon' => 'app\system\assets\images\sloth_dribbble.png',
            'url' => '@helloWorld'
        ],
        'helloWorld6' => [
            'label' => 'Sloth',
            'icon' => 'app\system\assets\images\sloth_dribbble.png',
            'url' => '@helloWorld'
        ],
    ],
    'events' => [

        'boot' => function ($event, $app) {
          
        },
        'request' => function ($event, $app) {
          
        },
        'controller' => function ($event, $app) {
          
        },
        'response' => function ($event, $app) {
          
        },
        'terminate' => function ($event, $app) {
          
        },
        'exception' => function ($event, $app) {
          
        },
        'auth.failure' => function () {
           return '<h1>Auth Fail fired</h1>';
        },


    ]
];

?>