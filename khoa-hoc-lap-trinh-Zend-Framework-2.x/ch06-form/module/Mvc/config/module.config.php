<?php
return array (
	'controllers'		=> array(
		'invokables'	=> array(
				'Mvc\Controller\Index'			=> 'Mvc\Controller\IndexController',
				'Mvc\Controller\Event'			=> 'Mvc\Controller\EventController',
				'Mvc\Controller\Service'		=> 'Mvc\Controller\ServiceController',
				'Mvc\Controller\ViewHelper'		=> 'Mvc\Controller\ViewHelperController',
				'Mvc\Controller\ViewManager'	=> 'Mvc\Controller\ViewManagerController',
				'Mvc\Controller\Router'			=> 'Mvc\Controller\RouterController',
				'Mvc\Controller\StudyController'=> 'Mvc\Controller\StudyControllerController',
				'Mvc\Controller\Plugin'			=> 'Mvc\Controller\PluginController',
			)
	),
	'view_manager'	=> array(
		'doctype'					=> 'HTML5',
		'display_not_found_reason' 	=> true,
		'not_found_template'       	=> 'error/404',
			
		'display_exceptions'       	=> true,
		'exception_template'       	=> 'error/index',
				
		'template_path_stack'		=> array(__DIR__ . '/../view'),
		'template_map' 				=> array(
				'layout/layout'     => __DIR__ . '/../view/layout/layout.phtml',
				'layout/home'     	=> __DIR__ . '/../view/layout/layout2.phtml',
				'error/404'			=> __DIR__ . '/../view/error/404.phtml',
				'error/index'		=> __DIR__ . '/../view/error/index.phtml',
				'error/myerror'		=> __DIR__ . '/../view/error/custom.phtml',
				'vm/header'			=> __DIR__ . '/../view/mvc/view-manager/header.phtml',
				'view/abc'			=> __DIR__ . '/../view/abc.phtml',
		),
		'default_template_suffix'  	=> 'phtml',
		'layout'					=> 'layout/layout'
	),

	'view_helpers'	=> array(
		'invokables' => array(
				'sayhello'			=> 'ZendVN\View\Helper\SayHello',
				'joinKeyValue'		=> 'ZendVN\View\Helper\JoinKeyValue',
				'myFormRow'			=> 'ZendVN\View\Helper\MyFormRow',
				'elementError'		=> 'ZendVN\View\Helper\ElementError',
				'elementErrors'		=> 'ZendVN\View\Helper\ElementErrors',
				'elementErrorIcon'	=> 'ZendVN\View\Helper\ElementErrorIcon',
				'formVideo'			=> 'ZendVN\Form\View\Helper\FormVideo',
		),
	),
			
	'service_manager' 				=> array(
		'invokables'				=> array(
				'Mvc\Service\User'		=> 'Mvc\Service\UserService',
				'Mvc\Service\Facebook'	=> '\Mvc\Service\FacebookService',
		),
		'allow_override'			=> true,
		'aliases'					=> array(
				'MSU'				=> 'Mvc\Service\User'
		),
		'abstract_factories'		=> array(
				// 'Mvc\Service\MyAbstractFactory'
		),
		'initializers'				=> array(
				// 'Mvc\Service\MyInitalizer',
		),
		'services'					=> array(
				// 'abc'				=> new \Mvc\Service\UserService(),
		)
	),
		
	'view_helper_config' => array(
			'flashmessenger' => array(
					'message_open_format'      => '<div class="info"><h4>',
					'message_close_string'     => '</h4></div>',
					'message_separator_string' => '</h4><h4>'
			)
	),
		
	'controller_plugins'	=> array(
// 			'invokables'	=> array(
// 					'myPluginAbc'	=> 'Mvc\Controller\Plugin\MyPlugin',
// 			),
	),
		
		
		
		
		
		
		
		
		

);