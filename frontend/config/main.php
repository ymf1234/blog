<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
	//开启语言包
	'language'=>'zh-CN',
	'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\UserModel',
            'enableAutoLogin' => true,
        ],
	    //配置理由
	    'urlManager'=>[
		    'enablePrettyUrl'=>true,
		    'showScriptName'=>false,
//		    'suffix'=>'.html',
	    ],
	    //配置语言包
	    'i18n'=>[
	        'translations'=>[
	        	'*'=>[
	        		'class'=>'yii\i18n\PhpMessageSource',
			        //'basePath'=>'/messages',
			        'fileMap'=>[
			        	'common'=>'common.php'
			        ],
		        ],
	        ],
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
    ],
    'params' => $params,
];