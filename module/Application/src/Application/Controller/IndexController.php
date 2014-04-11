<?php
namespace Application\Controller;

use Application\Entity\Cliente;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends CrudController
{
	public function __construct(){
		$this->entity = 'Application\Entity\Cliente';
		
	}
}
