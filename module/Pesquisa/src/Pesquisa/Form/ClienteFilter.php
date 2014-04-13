<?php
namespace Pesquisa\Form;

use Zend\InputFilter\InputFilter;

class ClienteFilter extends InputFilter{
	public function __construct(){
		$this->add(array(
				'name' => 'nome',
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
					),
				'validators' => array(
						array(
								'name'    => 'StringLength',
								'options' => array(
										'encoding' => 'UTF-8',
										'min'      => 1,
										'max'      => 250,
										'messages' => array(
												'stringLengthTooLong' => 'Digite no máximo 250 caracteres.'
										),
								),
								'name' => 'NotEmpty',
								'options'=>array(
										'messages'=>array(
												'isEmpty'=>'Por favor, digite seu nome'
												)
										),
						),
				),
		));
		/*
		$validator = new \Zend\Validator\EmailAddress;
		$validator->setOptions(array('domain'=>FALSE));
		
		$this->add(array(
				'name' => 'email',
				'validators' => array($validator)
		));*/
		
		$this->add(array(
				'name' => 'email',
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
					),
				'validators' => array(
						array(								
								'name'    => 'StringLength',
								'options' => array(
										'encoding' => 'UTF-8',
										'min'      => 1,
										'max'      => 250,
										'messages' => array(
												'stringLengthTooLong' => 'Digite no máximo 250 caracteres.'
										),
								),
								'name' => 'NotEmpty',
								'options'=>array(
										'messages'=>array(
												'isEmpty'=>'Por favor, digite seu email'
												)
									),
								'name' => 'EmailAddress',
								'options' => array(
										'messages'=>array(
												'emailAddressInvalidFormat' => 'Acho que seu email está errado'
												)
								),
						),
				),
				
		));
		$this->add(array(
				'name' => 'telefone',
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
					),
				'validators' => array(
						array(
								'name'    => 'StringLength',
								'options' => array(
										'encoding' => 'UTF-8',
										'min'      => 1,
										'max'      => 250,
										'messages' => array(
												'stringLengthTooLong' => 'Digite no máximo 250 caracteres.'
										),
								),
								'name' => 'NotEmpty',
								'options'=>array(
										'messages'=>array(
												'isEmpty'=>'Por favor, digite o número do celular'
										)
								),
						),
				),
		));
		$this->add(array(
				'name' => 'setor',
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
					),
				'validators' => array(
						array(
								'name'    => 'StringLength',
								'options' => array(
										'encoding' => 'UTF-8',
										'min'      => 1,
										'max'      => 250,
										'messages' => array(
												'stringLengthTooLong' => 'Digite no máximo 250 caracteres.'
										),
								),
								'name' => 'NotEmpty',
								'options'=>array(
										'messages'=>array(
												'isEmpty'=>'Por favor, digite o seu setor'
										)
								),
						),
				),
		));
		
	}
	
	
}