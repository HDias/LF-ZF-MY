<?php
namespace Pesquisa\Service;

use Doctrine\ORM\EntityManager;

class ClienteService extends AbstractService{
	
	public function __construct(EntityManager $em){
		parent::__construct($em);
		$this->entity = 'Pesquisa\Entity\ClienteEntity';
		}
}