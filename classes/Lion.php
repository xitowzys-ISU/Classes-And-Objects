<?php

namespace classes;

class Lion extends Animal {

    protected $name = "Лев";

    public function chase() {
        return 'I am chasing a Gazelle!';
    }

    public function eat() {
        return 'I am now eating the gazelle ';
    }
}
