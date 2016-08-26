<?php

use Pagekit\Application;

// packages/pagekit/helloWorld/index.php
  // array of namespaces to autoload from given folders
    
return [

    'name' => 'helloWorld',

    'type' => 'extension',

    // called when Pagekit initializes the module
    'main' => function (Application $app) {
        
    },
    'permissions' => [
        'smoke: Smoke Weed in the Club' => [
            'title' => 'Smoke Weed in the Club?'
        ]
    ]
    'autoload' => [
        'Pagekit\\helloWorld\\' => 'src'
    ],
     'routes' => [
        // identifier to reference the route from your code
        'helloWorld' => [
            // which path this extension should be mounted to
            'path' => '/helloWorld',
            // which controller to mount
            'controller' => 'Pagekit\\helloWorld\\Controller\\helloWorldController'
        ]
    ],
    'resources' => [
    	'helloWorld:' => ''
    ],
    'config' => [
        'configSettings' => [
            'configOne' => 'wakka wakka',
            'configTwo' => 'flakka flakka'
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
    ]
];

?>