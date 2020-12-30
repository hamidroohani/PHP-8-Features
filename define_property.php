<?php

class Php8 {
    public function __construct(public $title, public $category)
    {
    }
}

$object = new Php8('project','laravel');
