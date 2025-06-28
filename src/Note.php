<?php

namespace Luis\MarcosPractica1;
class Note{
    public $title;
    public $body;
    public $id;

    public function __construct($title, $body){
        $this->title = $title;
        $this->body = $body;
        $this->id = uniqid();
    }

}