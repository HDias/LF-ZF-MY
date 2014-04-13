<?php
namespace Pesquisa\Form;

use Zend\Form\Element\File;

use Zend\Form\Form;

class ClienteForm extends Form{
	public function __construct($name = null)
	{
		parent::__construct('clienteform');

		$this->setAttribute('method', 'post');
		$this->setInputFilter(new ClienteFilter());
		
		$this->add(array(
				'name' => 'id',
				'type' => 'Hidden',
		));
		
		$this->add(array(
				'name' => 'nome',
				'type' => 'Text',
				'attributes' => array(
						//'required' => true,
						'id' => 'nome',
						'class' => 'form-control',
						'placeholder'=> 'Digite seu nome...',
				),
				'options' => array(
						'label' => 'Nome',
				),
		));
		
		$this->add(array(
				'name' => 'email',
				'type' => 'Text',
				'attributes' => array(
						'id' => 'email',
						'class' => 'form-control',
						'placeholder'=> 'seu email...',
				),
				'options' => array(
						'label' => 'Email',
				),
		));
		$this->add(array(
				'name' => 'telefone',
				'type' => 'Text',
				'attributes' => array(
						'id' => 'telefone',
						'class' => 'form-control',
						'placeholder'=> 'o numero do celular...',
				),
				'options' => array(
						'label' => 'Telefone',
				),
		));
		$this->add(array(
				'name' => 'setor',
				'type' => 'Text',
				'attributes' => array(
						'id' => 'setor',
						'class' => 'form-control',
						'placeholder'=> 'e o setor que você mora...',
				),
				'options' => array(
						'label' => 'Setor',
				),
		));
	
		$this->add(array(
				'name' => 'submit',
				'type' => 'Submit',
				'attributes' => array(
						'id' => 'submitbutton',
						'class' =>'btn btn-primary',
						'value' => 'Salvar',
					),
		));
	}
}