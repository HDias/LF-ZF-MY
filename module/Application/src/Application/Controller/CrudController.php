<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

abstract class CrudController extends AbstractActionController{
	protected $entity;
	
	public function indexAction(){
		$list = $this->getEm()
					->getRepository($this->entity)
					->findAll();
			
		return new ViewModel(
				array('home' => $list)
		);
	}
	
	protected function getEm(){
		$em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
	
		return $em;
	}
}