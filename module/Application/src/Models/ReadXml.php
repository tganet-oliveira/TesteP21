<?php


namespace Application\Models;


use Application\Entity\Torcedores;
use Doctrine\ORM\EntityManager;

class ReadXml
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
     * Função responsável por ler o arquivo de dados XML
     */
    public function readXml()
    {
        $file = 'public\file\cliente.xml';
        $xml = simplexml_load_string(file_get_contents($file));
        $i=0;
        foreach ($xml->torcedor as $k => $v)
        {
            $dados[$i]['nome']      = trim((string)$v['nome']);
            $dados[$i]['documento'] = trim((string)$v['documento']);
            $dados[$i]['cep']       = trim((string)$v['cep']);
            $dados[$i]['endereco']  = trim((string)$v['endereco']);
            $dados[$i]['bairro']    = trim((string)$v['bairro']);
            $dados[$i]['cidade']    = trim((string)$v['cidade']);
            $dados[$i]['uf']        = trim((string)$v['uf']);
            $dados[$i]['telefone']  = trim((string)$v['telefone']);
            $dados[$i]['email']     = trim((string)$v['email']);
            $dados[$i]['ativo']     = (int)$v['ativo'];

            $i++;
        }
        $this->gerenciarDados($dados);
    }


    /**
     * Função que controla os dados para serem cadastrados
     */
    public function gerenciarDados($dados)
    {
        foreach ($dados as $dado) {
            $this->gravarDados($dado);
        }
        return true;
    }

    /**
     * Persistir dados na tabela
     */
    public function gravarDados($dados)
    {
        $torcedor = new Torcedores();
        $torcedor->setNome($dados['nome']);
        $torcedor->setCpf($dados['documento']);
        $torcedor->setCep($dados['cep']);
        $torcedor->setEndereco($dados['endereco']);
        $torcedor->setBairro($dados['bairro']);
        $torcedor->setCidade($dados['cidade']);
        $torcedor->setUf($dados['uf']);
        $torcedor->setTelefone($dados['telefone']);
        $torcedor->setEmail($dados['email']);
        $torcedor->setAtivo($dados['ativo']);

        $this->entityManager->persist($torcedor);
        $this->entityManager->flush();
        return true;
    }
}