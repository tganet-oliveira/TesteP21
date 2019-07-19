<?php


namespace Application\Models;


use Application\Entity\Torcedores;
use Doctrine\ORM\EntityManager;

class Torcedor
{
    /**
     * @var EntityManager
     */
    private $entityManager;
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Listar torcedores
     */

    public function listarTorcedores()
    {
        $torcedorRepository = $this->entityManager->getRepository(Torcedores::class);
        $res = $torcedorRepository->findAll();
        return $res;
    }

    /**
     * Salvar dados dos torcedores
     */
    public function salvarTorcedores($dados)
    {
        if(!empty($dados['id'])){
            $torcedor = $this->buscar($dados['id']);
        }else{
            $torcedor = new Torcedores();
        }
        $torcedor->setNome($dados['torcedor']);
        $torcedor->setCpf($dados['cpf']);
        $torcedor->setCep($dados['cep']);
        $torcedor->setEndereco($dados['endereco']);
        $torcedor->setCidade($dados['cidade']);
        $torcedor->setUf($dados['uf']);
        $torcedor->setTelefone($dados['telefone']);
        //$torcedor->setBairro($dados['bairro']);
        $torcedor->setEmail($dados['email']);
        $torcedor->setAtivo($dados['ativo']);
        if(isset($dados['id'])){
            $torcedor->setId($dados['id']);
        }

        $this->entityManager->persist($torcedor);
        $this->entityManager->flush();
    }
    /**
     * Função para buscar Torcedor
     */

    public function buscar($id)
    {
        $torcedor = $this->entityManager->getRepository(Torcedores::class)->find($id);
        return $torcedor;
    }

    /**
     * @param $dados
     * @return bool
     * Função para excluir o torcedor
     */
    public function excluir($dados)
    {
        $id = $dados['id'];
        $torcedor = $this->buscar($id);
        $this->entityManager->remove($torcedor);
        $this->entityManager->flush();
        return true;
    }
}