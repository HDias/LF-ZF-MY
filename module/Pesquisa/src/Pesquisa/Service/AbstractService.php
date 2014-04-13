<?php
namespace Pesquisa\Service;

use Doctrine\ORM\EntityManager;

abstract class AbstractService{
	/**
	 * @var EntityManager
	 */
	protected $em;
	
	protected $entity;
	
	public function __construct(EntityManager $em){
		$this->em = $em;
		}
	
	public function insert(array $data){		
		$entity = new $this->entity($data);	
		
		$this->em->persist($entity);
		$this->em->flush();	
		return $entity;
		}
	
}