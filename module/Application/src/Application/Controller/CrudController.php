<?php
namespace Application\Controller;

use Zend\Session\Container;

use Application\Entity\Configurator;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

abstract class CrudController extends AbstractActionController{
	protected $entity;
	protected $form;
	protected $routeIndex;
	protected $routeThanks;
	
	public function indexAction(){
		$list = $this->getEm()
					->getRepository($this->entity)
					->findAll();
			
		return new ViewModel(
				array('home' => $list)
		);
	}
	
	public function thanksAction(){
		$thanksCookie = new Container();
		
		return new ViewModel(
				array(	
				'nome' => $thanksCookie->nome,
				)
		);
		//unset($thanksCookie->nome);
	}
	
	public function addAction(){
		$form = new $this->form();
		//$form->get('submit')->setValue('Salvar');
		
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
				
				$entity = new $this->entity($data);
				$entity = Configurator::configure($entity, $data);
				
				$this->getEm()->persist($entity);
				$this->getEm()->flush();
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