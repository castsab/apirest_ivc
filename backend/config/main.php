<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), 
        require(__DIR__ . '/../../common/config/params-local.php'),
        require(__DIR__ . '/../../common/config/main-local.php'), 
        require(__DIR__ . '/params.php'), 
        require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'timeZone'  => 'America/Bogota',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
            
            'parsers'=>[
                'application/json' => 'yii\web\JsonParser'
            ]
        
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule', 
                    'controller' => 'api/establishment',
                    'pluralize'=>false,
                    'tokens' => [
                        '{id}' => '<id:\\w+>'
                    ],
                    'extraPatterns' => [    
                        'POST' => 'create', 
                        'PUT {id}' => 'update',
                        'PATCH {id}' => 'update',
                        'DELETE {id}' => 'delete',
                        'GET {id}' => 'view',
                        'GET {count}' => 'index',
                    ],
                ],
                [
                    'class' => 'yii\rest\UrlRule', 
                    'controller' => 'api/entity',
                    'pluralize'=>false,
                    'tokens' => [
                        '{id}' => '<id:\\w+>'
                    ],
                    'extraPatterns' => [    
                        'POST' => 'create', 
                        'PUT {id}' => 'update',
                        'PATCH {id}' => 'update',
                        'DELETE {id}' => 'delete',
                        'GET {id}' => 'view',
                        'GET {count}' => 'index',
                    ],
                ],
                [
                    'class' => 'yii\rest\UrlRule', 
                    'controller' => 'api/visit',
                    'pluralize'=>false,
                    'tokens' => [
                        '{id}' => '<id:\\w+>'
                    ],
                    'extraPatterns' => [    
                        'POST' => 'create', 
                        'PUT {id}' => 'update',
                        'PATCH {id}' => 'update',
                        'DELETE {id}' => 'delete',
                        'GET {id}' => 'view',
                        'GET {count}' => 'index',
                    ],
                ],
                  [
                    'class' => 'yii\rest\UrlRule', 
                    'controller' => 'api/synchronization',
                    'pluralize'=>false,
                    'tokens' => [
                        '{id}' => '<id:\\w+>'
                    ],
                    'extraPatterns' => [    
                        'POST' => 'create', 
                        'PUT' => 'update',
                        'PATCH {id}' => 'update',
                        'DELETE {id}' => 'delete',
                        'GET {id}' => 'view',
                        'GET {count}' => 'index',
                    ],
                ]
            
            ],
        ],
     
    ],
    
    
    'modules' => [
        'api' => [
            'class' => 'backend\modules\api\Api',
        ],
    ],
    
    'params' => $params,
];
