<?php
namespace Pesquisa\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Session\Container;

abstract class CrudController extends AbstractActionController{
	protected $entity;
	protected $form;
	protected $service;
	protected $routeIndex;
	protected $routeThanks;
	protected $routeAuxiliar;
	
	//Index
	public function indexAction(){
		return $this->redirect()->toRoute($this->routeAuxiliar);
		/*
		$list = $this->getEm()
					->getRepository($this->entity)
					->findAll();
			
		return new ViewModel(
				array('home' => $list)
		);*/
	}
	//Thanks
	public function thanksAction(){
		$thanksCookie = new Container();
		
		return new ViewModel(
				array(	
				'nome' => $thanksCookie->nome,
				)
		);
		//unset($thanksCookie->nome);
	}
	//Add
	public function addAction(){
		$form = new $this->form();
		
		$request = $this->getRequest();
		if ($request->isPost()) {
			
			 $form->setData($request->getPost());
			
			if ($form->isValid()) {
				$data = $request->getPost()->toArray();
				/*
				 * Cookie
				 */
				$thanksCookie = new Container();
				$thanksCookie->nome = $data['nome'];
				$service = $this->getServiceLocator()->get($this->service);
				
				$service->insert($request->getPost()->toArray());
				/*
				$entity = new $this->entity($data);
				$entity = Configurator::configure($entity, $data);
				
				$this->getEm()->persist($entity);
				$this->getEm()->flush();*/
				/*
				$service = $this->getServiceLocator()->get($this->service);
		
				$service->insert($request->getPost()->toArray());
		
				$this->flashMessenger()->addSuccessMessage("Culto criado com sucesso");
		*/
				return $this->redirect()->toRoute($this->routeThanks);
			}else
				$this->flashMessenger()->addErrorMessage("Erro ao adicionar culto");
				
		}
		return new ViewModel(
				array(	'form' => $form,
				));
	}
	
	protected function getEm(){
		$em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
	
		return $em;
	}
}