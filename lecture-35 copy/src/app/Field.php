<?php

namespace App;

abstract class Field {
    public function __construct(public string $name) {

    }

    abstract public function render():string;
}