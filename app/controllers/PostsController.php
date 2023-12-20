<?php

namespace app\controllers;

class PostsController extends AppController
{

    public function indexAction(){
        $menu = $this->menu;
        $this->set(compact('menu'));
    }

    public function testAction(){

    }

}