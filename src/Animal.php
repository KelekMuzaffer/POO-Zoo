<?php

namespace App;


abstract class Animal {

    /**
     * @var String $_name
     */
    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    /**
     * @return String
     */
    abstract protected function getNoise() : String;

    /**
     * @return String
     */
    public function getName() : String
    {
        return  $this->_name;
    }

    /**
     * @return String
     */
    public function noise() : String
    {
        return $this->getName() . ' ' . $this ->getNoise().' ';
    }

}