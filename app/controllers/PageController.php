<?php

namespace app\controllers;

class PageController extends AppController
{

    public function viewAction(){
        $menu = $this->menu;
        $this->set(compact('menu'));
    }

}