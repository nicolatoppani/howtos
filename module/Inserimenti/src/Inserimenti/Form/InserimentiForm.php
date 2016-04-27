<?php

namespace Inserimenti\Form;

use Zend\Form\Form;

class InserimentiForm extends Form
{
  public function __construct()
   {
       // we want to ignore the name passed
       parent::__construct('Inserimenti');

       $this->add(array(
           'name' => 'id',
           'type' => 'Hidden',
       ));
       $this->add(array(
           'name' => 'title',
           'type' => 'Text',
           'options' => array(
               'label' => 'Titolo',
           ),
       ));
       $this->add(array(
           'name' => 'autore',
           'type' => 'Text',
           'options' => array(
               'label' => 'Autore',
           ),
       ));
       $this->add(array(
           'name' => 'contenuto',
           'type' => 'Textarea',
           'options' => array(
               'label' => 'Contenuto del tuo HOWTO',
           ),
       ));
       $this->add(array(
           'name' => 'submit',
           'type' => 'Submit',
           'attributes' => array(
               'value' => 'Inserisci',
               'id' => 'submitbutton',
           ),
       ));
   }
}
