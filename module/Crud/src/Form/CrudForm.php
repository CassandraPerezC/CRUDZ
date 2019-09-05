<?php

	namespace Crud\Form;
  
	use Zend\Form\Form;

	class CrudForm extends Form
{
    public function __construct($name = null){
    	parent::__construct('crud');
    	$this->setAttribute('method','POST');

        $this->add([
            'name' => 'id',
            'type' => 'hidden',
        ]);

 		$this->add([
            'name' => 'nombre',
            'type' => 'text',
            'options' => [
                'label' => 'Nombre(s)',
            ],
        ]);
        $this->add([
            'name' => 'apPat',
            'type' => 'text',
            'options' => [
                'label' => 'Apellido Paterno',
            ],
        ]);
         $this->add([
            'name' => 'apMat',
            'type' => 'text',
            'options' => [
                'label' => 'Apellido Materno',
            ],
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Aceptar',
                'id'    => 'submitbutton',
            ],
        ]);
    }
}



