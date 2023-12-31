<?php

namespace vendor\core\base;

abstract class Controller
{

    public $route = [];

    public $layout;
    public $view;
    public $vars = [];

    public function __construct(array $route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->vars);
    }

    public function set($vars){
        $this->vars = $vars;
    }

}