<?php

namespace classes;

abstract class Animal {
    protected $name = "Животное";

    protected $gender;

    public function __construct($gender, $name = "")
    {
        if (!empty($name))
            $this->setName($name);

        $this->setGender($gender);
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getGender() {
        return $this->gender;
    }

    abstract public function eat();
}
