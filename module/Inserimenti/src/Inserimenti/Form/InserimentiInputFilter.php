<?php

namespace Inserimenti\Form;

use Zend\InputFilter\InputFilter;

class InserimentiInputFilter extends InputFilter
{

    public function __construct()
    {

        $this->add([
            'name' => 'title',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);

        $this->add([
            'name' => 'autore',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);

        $this->add([
            'name' => 'contenuto',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);



    }

}
