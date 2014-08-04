<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
Yii::setPathOfAlias('booster',dirname(__FILE__) . DIRECTORY_SEPARATOR . '../extensions/booster');
Yii::setPathOfAlias('auth',dirname(__FILE__) . DIRECTORY_SEPARATOR . '../modules/auth');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'theme'=>'front',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array(
		'log',
		// 'booster'
	),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
        'application.modules.user.components.*',
        'application.modules.auth.*',
        'application.modules.auth.components.*',
	),

	'modules'=>array(
		'manager',
		// 'auth',
		 'user'=>array(
            # encrypting method (php hash function)
            'hash' => 'md5',
 
            # send activation email
            'sendActivationMail' => true,
 
            # allow access for non-activated users
            'loginNotActiv' => false,
 
            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,
 
            # automatically login from registration
            'autoLogin' => true,
 
            # registration path
            'registrationUrl' => array('/user/registration'),
 
            # recovery password path
            'recoveryUrl' => array('/user/recovery'),
 
            # login form path
            'loginUrl' => array('/user/login'),
 
            # page after login
            'returnUrl' => array('/user/profile'),
 
            # page after logout
            'returnLogoutUrl' => array('/user/login'),
        ),
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			// 'class'=>'booster.gii.'
			'generatorPaths' => array(
	            'booster.gii'
	        ),
			'password'=>'a',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		/*'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
        ),*/
		/*'authManager'=>array(
			'class'=>'CDbAuthManager',
			'connectionID'=>'db',
			'behaviors'=>array(
				'auth'=>array(
					'class'=>'application.modules.auth.components.AuthBehavior'
				)
			),
		),*/
		'booster'=>array(
			'class'=>'booster.components.Booster',
		),
		'user'=>array(
			// enable cookie-based authentication
			// 'allowAutoLogin'=>true,
			// 'class' => 'auth.components.AuthWebUser',
			// 'admins' => array('admin'), // users with full access
			'class' => 'WebUser',
      		
      		'allowAutoLogin'=>true,
            'loginUrl' => array('/user/login'),
		),
		'phpThumb'=>array(
			'class'=>'ext.EPhpThumb.EPhpThumb',
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		
		// uncomment the following to use a MySQL database
		
		/*'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=trunk',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),*/
		'db'=>array(
			'connectionString' => 'pgsql:host=localhost;port=5432;dbname=trunk',
			'emulatePrepare' => true,
			'username' => 'trunk_usr',
			'password' => 'harxa',
			'charset' => 'utf8',
			'tablePrefix'=>'tbl_',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'adminTheme'=>'sb-admin',
	),
);