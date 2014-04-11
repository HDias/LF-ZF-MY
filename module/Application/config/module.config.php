<?php
namespace Application;

return array(
		'doctrine' => array(
				'driver' => array(
						'application_entities' => array(
								'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
								'cache' => 'array',
								'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
						),
						'orm_default' => array(
								'drivers' => array(
										__NAMESPACE__ . '\Entity' => 'application_entities'
								),
						),
				),
		),

		'router' => array(
				'routes' => array(
						'home' => array(
								'type' => 'Zend\Mvc\Router\Http\Literal',
								'options' => array(
										'route'    => '/',
										'defaults' => array(
												'controller' => 'Application\Controller\Index',
												'action'     => 'index',
										),
								),
						),
						// The following is a route to simplify getting started creating
						// new controllers and actions without needing to create a new
						// module. Simply drop new controllers in, and you can access them
						// using the path /application/:controller/:action
						'application' => array(
								'type'    => 'Literal',
								'options' => array(
										'route'    => '/cliente',
										//'route'    => '/application',
										'defaults' => array(
												'__NAMESPACE__' => 'Application\Controller',
												'controller'    => 'Index',
												'action'        => 'add',
												//'action'        => 'index',
										),
								),
								'may_terminate' => true,
								'child_routes' => array(
										'default' => array(
												'type'    => 'Segment',
												'options' => array(
														'route'    => '/[/:action][/:id]',
														'constraints' => array(
																'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
																'id'	 => '\d+',	
														),
														'defaults' => array(
														),
												),
										),
								),
						),
						'thanks' => array(
								'type' => 'Zend\Mvc\Router\Http\Literal',
								'options' => array(
										'route' => '/obrigado',
										'defaults' => array(
												'__NAMESPACE__' => 'Application\Controller',
												'controller'    => 'Index',
												'action' => 'thanks',
										),
								),
						),
				),
		),
		'service_manager' => array(
				'abstract_factories' => array(
						'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
						'Zend\Log\LoggerAbstractServiceFactory',
				),
				'aliases' => array(
						'translator' => 'MvcTranslator',
				),
		),
		'translator' => array(
				'locale' => 'en_US',
				'translation_file_patterns' => array(
						array(
								'type'     => 'gettext',
								'base_dir' => __DIR__ . '/../language',
								'pattern'  => '%s.mo',
						),
				),
		),
		'controllers' => array(
				'invokables' => array(
						'Application\Controller\Index' => 'Application\Controller\IndexController'
				),
		),
		'view_manager' => array(
				'display_not_found_reason' => true,
				'display_exceptions'       => true,
				'doctype'                  => 'HTML5',
				'not_found_template'       => 'error/404',
				'exception_template'       => 'error/index',
				'template_map' => array(
						'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
						'application/index/cliente' => __DIR__ . '/../view/application/index/cliente.phtml',
						'error/404'               => __DIR__ . '/../view/error/404.phtml',
						'error/index'             => __DIR__ . '/../view/error/index.phtml',
				),
				'template_path_stack' => array(
						__DIR__ . '/../view',
				),
		),
		// Placeholder for console routes
		'console' => array(
				'router' => array(
						'routes' => array(
						),
				),
		),
);
