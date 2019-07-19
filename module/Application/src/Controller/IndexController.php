<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Entity\Torcedores;
use Application\Form\FileUpload;
use Application\Form\TorcedorForm;
use Application\Models\ReadXml;
use Application\Models\Torcedor;
use Doctrine\ORM\EntityManager;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class IndexController extends AbstractActionController
{
    /**
     * @var EntityManager
     */
    private $entityManager;
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function indexAction()
    {
        $form = new FileUpload();
        $request = $this->getRequest();
        if($request->isPost()){
            $post = array_merge_recursive(
                $request->getPost()->toArray(),
                $request->getFiles()->toArray()
            );

            $form->setData($post);
            if($form->isValid()){
                $data = $form->getData();
                move_uploaded_file($data['file']['tmp_name'],'public\file\cliente.xml');
                $model = new ReadXml($this->entityManager);
                $model->readXml($this->entityManager);
                $this->redirect()->toRoute('listar');
            }
        }
        return new ViewModel(
            array(
                'form' => $form,
            )
        );
    }

    public function listarAction()
    {
        $torcedor = new Torcedor($this->entityManager);
        $res = $torcedor->listarTorcedores();
        return new ViewModel(array(
            'res' => $res
        ));
    }

    public function excelAction()
    {
        $torcedor = new Torcedor($this->entityManager);
        $res = $torcedor->listarTorcedores();
        return new ViewModel(array(
            'res' => $res
        ));
    }

    /**
     * Action responsável pelo formulário do Torcedor
     */

    public function torcedorAction()
    {
        $id = $this->params()->fromRoute('id');
        $form = new TorcedorForm();
        $dadosForm = '';
        $title = 'Adicionar novo Torcedor';
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post = $request->getPost()->toArray();
            $form->setData($post);
            if ($form->isValid()) {
                $data = $form->getData();
                $torcedor = new Torcedor($this->entityManager);
                $torcedor->salvarTorcedores($data);
                $this->redirect()->toRoute('listar');
            }
        }
        if(!empty($id)) {
            $torcedor = new Torcedor($this->entityManager);
            $dadosForm = $torcedor->buscar($id);
            $form->get('id')->setValue($dadosForm->getId());
            $form->get('torcedor')->setValue($dadosForm->getNome());
            $form->get('cpf')->setValue($dadosForm->getCpf());
            $form->get('cep')->setValue($dadosForm->getCep());
            $form->get('endereco')->setValue($dadosForm->getEndereco());
            $form->get('cidade')->setValue($dadosForm->getCidade());
            $form->get('uf')->setValue($dadosForm->getUf());
            $form->get('telefone')->setValue($dadosForm->getTelefone());
            $form->get('email')->setValue($dadosForm->getEmail());
            $form->get('ativo')->setValue($dadosForm->getAtivo());
            $form->get('submit')->setValue('Atualizar');
            $title = 'Editar Torcedor';
        }

        return new ViewModel([
            'form' => $form,
            'dadosForm' => $dadosForm,
            'title' => $title
        ]);
    }

    public function excluirAction()
    {
        $request = $this->getRequest();
        if ($request->isPost()) {
            $torcedor = new Torcedor($this->entityManager);
            $torcedor->excluir($this->params()->fromPost());
            $this->redirect()->toRoute('listar');
        }
    }
}
