<?php

class User{

    public function article(){
        return new Article();
    }
}

class Article{
    public function nothing(){
        return new Nothing('Hello world');
    }
}

class Nothing{

    public function __construct(public $title){
        return $title;
    }
}

$user = new User();


echo $user?->article()?->nothing()->title;