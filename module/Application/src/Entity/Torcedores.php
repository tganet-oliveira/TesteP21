<?php


namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Torcedores
 * @ORM\Entity
 * @ORM\Table(name="tb_torcedores")

 */
class Torcedores
{
    /**
     * @var integer
     * @ORM\Column(name="id_torcedor",type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="ds_nome", type="string", length=200, nullable=false)
     */
    private $nome;

    /**
     * @var string
     * @ORM\Column(name="ds_cpf", type="string", length=11, nullable=false)
     */
    private $cpf;

    /**
     * @var string
     * @ORM\Column(name="ds_cep", type="string", length=7, nullable=false)
     */
    private $cep;

    /**
     * @var string
     * @ORM\Column(name="ds_endereco", type="string", length=250, nullable=false)
     */
    private $endereco;

    /**
     * @var string
     * @ORM\Column(name="ds_bairro", type="string", length=100)
     */
    private $bairro;


    /**
     * @var string
     * @ORM\Column(name="ds_cidade", type="string", length=100)
     */
    private $cidade;

    /**
     * @var string
     * @ORM\Column(name="ds_uf", type="string", length=2)
     */
    private $uf;

    /**
     * @var string
     * @ORM\Column(name="ds_telefone", type="string", length=45)
     */
    private $telefone;

    /**
     * @var string
     * @ORM\Column(name="ds_email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="ds_ativo", type="string", length=1)
     */
    private $ativo;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Torcedores
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return Torcedores
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     * @return Torcedores
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param string $cep
     * @return Torcedores
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param string $endereco
     * @return Torcedores
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param string $bairro
     * @return Torcedores
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param string $cidade
     * @return Torcedores
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * @return string
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param string $uf
     * @return Torcedores
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param string $telefone
     * @return Torcedores
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Torcedores
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param string $ativo
     * @return Torcedores
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
        return $this;
    }



}