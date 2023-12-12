<?php

namespace app\controllers;

class Main extends App
{

//    public $layout = 'main';

    public function indexAction(){
//        $this->layout = false;
//        $this->layout = 'main';
//        $this->view = 'test';
        $name = 'test';
        $hi = 'hello';
        $colors = [
            'white' => 'белый',
            'black' => 'черный'
        ];
        $this->set(compact('name', 'hi', 'colors'));
    }

}