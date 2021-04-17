<?php

namespace classes;

class Dog extends Animal {

    protected $name = "Собака";

    public function eat() {
        return 'I am now eating meat.';
    }
}
