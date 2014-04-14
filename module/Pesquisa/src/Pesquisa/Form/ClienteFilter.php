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
										'max'      => 250,
										'messages' => array(
												'stringLengthTooLong' => 'Seu nome parece ser muito grande. Tente novamente!'
										),
								),
						),
						array(
								'name' => 'NotEmpty',
								'options'=>array(
										'messages'=>array(
												'isEmpty'=>'Por favor, digite o seu nome'
										)
								),
						),
				),
		));
		$this->add(array(
				'name' => 'email',
				'filters' => array(
						array('name' => 'StripTags'),
						array('name' => 'StringTrim'),
				),
				'validators' => array(
						array(
								'name' => 'EmailAddress',
								'options' => array(
										'useDomainCheck' => false,
										'messages'=>array(
												'emailAddressInvalidFormat' => 'Acho que seu email está errado',
										)
								)
						),
						array(
								'name'    => 'StringLength',
								'options' => array(
										'encoding' => 'UTF-8',
										'max'      => 250,
										'messages' => array(
												'stringLengthTooLong' => 'Seu email parece ser muito grande. Tente novamente!'
										),
								),
						),
						array(
								'name' => 'NotEmpty',
								'options'=>array(
										'messages'=>array(
												'isEmpty'=>'Por favor, digite o seu email'
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
										'max'      => 250,
										'messages' => array(
												'stringLengthTooLong' => 'Seu telefone parece ser muito grande. Tente novamente!'
										),
								),
						),
						array(
								'name' => 'NotEmpty',
								'options'=>array(
										'messages'=>array(
												'isEmpty'=>'Por favor, digite o seu telefone'
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
										'max'      => 250,
										'messages' => array(
												'stringLengthTooLong' => 'Seu setor parece ser muito grande. Tente novamente!'
										),
								),
						),
						array(
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