<?php
namespace Pesquisa\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends CrudController
{
	public function __construct(){
		$this->entity = 'Pesquisa\Entity\ClienteEntity';
		$this->form = 'Pesquisa\Form\ClienteForm';
		$this->service = 'Pesquisa\Service\ClienteService';
		$this->routeIndex = 'home';
		$this->routeThanks = 'thanks';
		$this->routeAuxiliar = 'cliente';	
	}
}
