<?php
namespace Pesquisa;

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
		'controllers' => array(
				'invokables' => array(
						'ClienteController' => 'Pesquisa\Controller\IndexController'
				),
		),

		'router' => array(
				'routes' => array(
						'home' => array(
				                'type'      => 'Literal',
				                'options'   => array(
				                    'route'    => '/',
				                    'defaults' => array(
				                        'controller' => 'ClienteController',
				                        'action'     => 'index',
				                    ),
				                ),
				            ),
						'cliente' => array(
								'type'      => 'Segment',
								'options'   => array(
										'route'    => '/mais-tempo-livre[/:action][/:id]',
										'constraints' => array(
												'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
												'id'     => '[0-9]+',
										),
										'defaults' => array(
												'controller' => 'ClienteController',
												'action'     => 'add',
										),
								),
						),
						'thanks' => array(
								'type' => 'Zend\Mvc\Router\Http\Literal',
								'options' => array(
										'route' => '/obrigado',
										'defaults' => array(
												'controller'    => 'ClienteController',
												'action' => 'thanks',
										),
								),
						),
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
);
