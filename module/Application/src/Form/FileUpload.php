<?php


namespace Application\Form;


use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class FileUpload extends Form
{
    public function __construct($name = null, $options = [])
    {
        parent::__construct($name, $options);

        $this->add(array(
           'name' => 'file',
           'type' => 'File',
           'options' => array(
               'label' => 'Upload de Torcedores'
           ),
           'attributes' => array(
               'id' => 'file',
               'class' => 'form-control',
           )
        ));

        $this->add(array(
            'type' => 'submit',
            'name' => 'submit',
            'attributes' => array(
                'id' => 'submit',
                'class' => 'btn btn-md btn-primary pull right',
                'value' => 'Atualizar'
            )
        ));
    }
}