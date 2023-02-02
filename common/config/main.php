<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
	'modules' => [
    'admin' => [
        'class' => 'mdm\admin\Module',
    ]
],
'components' => [
    'authManager' => [
        'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
		'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
    ], 
	'user' => [
        
        'identityClass' => 'mdm\admin\models\User',
        'loginUrl' => ['admin/user/login'],
    ]
],

];
