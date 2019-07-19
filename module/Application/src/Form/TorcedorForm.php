<?php


namespace Application\Form;


use Zend\Form\Form;

class TorcedorForm extends Form
{
    public function __construct($name = null, $options = [])
    {
        parent::__construct($name, $options);

        $this->add(array(
            'name' => 'torcedor',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nome:'
            ),
            'attributes' => array(
                'id' => 'torcedor',
                'class' => 'form-control',
                'maxlength' => '200'
            )
        ));

        $this->add(array(
            'name' => 'cpf',
            'type' => 'Text',
            'options' => array(
                'label' => 'CPF:'
            ),
            'attributes' => array(
                'id' => 'cpf',
                'class' => 'form-control',
                'maxlength' => '14'
            )
        ));

        $this->add(array(
            'name' => 'cep',
            'type' => 'Text',
            'options' => array(
                'label' => 'CEP:'
            ),
            'attributes' => array(
                'id' => 'cep',
                'class' => 'form-control',
                'maxlength' => '9'
            )
        ));

        $this->add(array(
            'name' => 'endereco',
            'type' => 'Text',
            'options' => array(
                'label' => 'Endereço:'
            ),
            'attributes' => array(
                'id' => 'endereco',
                'class' => 'form-control',
                'maxlength' => '250'
            )
        ));

        $this->add(array(
            'name' => 'cidade',
            'type' => 'Text',
            'options' => array(
                'label' => 'Cidade:'
            ),
            'attributes' => array(
                'id' => 'cidade',
                'class' => 'form-control',
                'maxlength' => '100'
            )
        ));

        $this->add(array(
            'name' => 'uf',
            'type' => 'Text',
            'options' => array(
                'label' => 'UF:'
            ),
            'attributes' => array(
                'id' => 'uf',
                'class' => 'form-control',
                'maxlength' => '2'
            )
        ));

        $this->add(array(
            'name' => 'telefone',
            'type' => 'Text',
            'options' => array(
                'label' => 'Telefone:'
            ),
            'attributes' => array(
                'id' => 'telefone',
                'class' => 'form-control',
                'maxlength' => '15'
            )
        ));

        $this->add(array(
            'name' => 'email',
            'type' => 'Text',
            'options' => array(
                'label' => 'E-mail:'
            ),
            'attributes' => array(
                'id' => 'email',
                'class' => 'form-control',
                'maxlength' => '100'
            )
        ));

        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
            'attributes' => array(
                'id' => 'id',
            )
        ));

        $this->add(array(
            'name' => 'ativo',
            'type' => 'Select',
            'options' => array(
                'label' => 'Ativo:',
                'empty_option' => 'Selecione',
                'value_options' => [
                    '0' => 'Ativo',
                    '1' => 'Inativo'
                ]
            ),
            'attributes' => array(
                'id' => 'ativo',
                'class' => 'form-control',
            )
        ));

        $this->add(array(
            'type' => 'submit',
            'name' => 'submit',
            'attributes' => array(
                'id' => 'submit',
                'class' => 'btn btn-md btn-primary pull right',
                'value' => 'Salvar'
            )
        ));
    }

}