<?php

namespace classes;

class Bird extends Animal {

    protected $name = "Птица";

    public function eat() {
        return 'I am now eating worms';
    }
}
