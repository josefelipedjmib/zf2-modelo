<?php

namespace Base\Form\Validator;

class Cnpj extends CgcAbstract {

    public function __construct(array $options = array()){
        parent::__construct($options);
    }

    /**
     * Tamanho do Campo
     * @var int
     */
    protected $size = 14;

    /**
     * Modificadores de Dígitos
     * @var array
     */
    protected $modifiers = [
        [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2],
        [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2]
    ];

}
