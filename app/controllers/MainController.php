<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController
{

//    public $layout = 'main';

    public function indexAction(){
//        $this->layout = false;
//        $this->layout = 'main';
//        $this->view = 'test';

        $model = new Main;
//        $res = $model->query("CREATE TABLE posts SELECT * FROM exampleshop.categories");
//        var_dump($res);

        $posts = $model->findAll();
//        $post = $model->findOne(20);

//        $data = $model->findBySql("SELECT * FROM posts ORDER BY id DESC LIMIT 2");
//        $data = $model->findBySql("SELECT * FROM {$model->table} WHERE name LIKE ?", ['%ка%']);

//        $dataLike = $model->findLike('ма', 'name');

        $hi = 'hi';
        $this->set(compact('hi', 'posts'));

    }

}