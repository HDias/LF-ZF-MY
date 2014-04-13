<?php
namespace Pesquisa;

use Pesquisa\Service\ClienteService;


class Module{

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig(){
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
	public function getServiceConfig(){
			return array(
					'factories' => array(
							__NAMESPACE__. '\Service\ClienteService' => function($sm){
								return new ClienteService($sm->get('Doctrine\ORM\EntityManager'));
								},
					),
			);
		}
}
