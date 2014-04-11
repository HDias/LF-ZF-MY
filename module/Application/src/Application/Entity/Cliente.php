<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity
 */
class Cliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=255, nullable=false)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="setor", type="string", length=255, nullable=false)
     */
    private $setor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_create", type="datetime", nullable=true)
     */
    private $datCreate;

    /**
     * @var string
     *
     * @ORM\Column(name="navegador", type="string", length=255, nullable=true)
     */
    private $navegador;

    /**
     * @var string
     *
     * @ORM\Column(name="dispositivo", type="string", length=255, nullable=true)
     */
    private $dispositivo;
	
    /*
     * Getter
    */
    public function getId() {
    	return $this->id;
    }
    public function getNome() {
    	return $this->nome;
    }
    public function getEmail() {
    	return $this->email;
    }
    public function getTelefone() {
    	return $this->telefone;
    }
    public function getSetor() {
    	return $this->setor;
    }
    public function getDatcreate() {
    	return $this->datcreate;
    }
    public function getNavegador() {
    	return $this->navegador;
    }
    public function getDispositivo() {
    	return $this->dispositivo;
    }
    /*
     * Setter
    */
    public function setNome($nome) {
    	$this->nome = $nome;
    	return $this;
    }
    public function setEmail($email) {
    	$this->email = $email;
    	return $this;
    }
    public function setTelefone($telefone) {
    	$this->telefone = $telefone;
    	return $this;
    }
    public function setSetor($setor) {
    	$this->setor = $setor;
    	return $this;
    }
    public function setDatCreate($dateCreate) {
    	$this->datCreate = $dateCreate;
    	return $this;
    }
    public function setNavegador($navegador) {
    	$this->navegador = $navegador;
    	return $this;
    }
    public function setDispositivo($dispositivo) {
    	$this->dispositivo = $dispositivo;
    	return $this;
    }

}
