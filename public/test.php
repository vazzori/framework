<?php
require '../vendor/libs/rb.php';
$db = require '../config/config_db.php';

R::setup($db['dsn'], $db['user'], $db['pass']);
R::freeze(true);
R::fancyDebug(true);
//var_dump(R::testConnection());

//create
//$category = R::dispense('category');
//$category->title = 'меню 5';
//$id = R::store($category);
//var_dump($id);

//read
//$category = R::load('category', 8);
//echo $category['title']; // $category->title

//update
//$category = R::load('category', 8);
//echo $category->title . '<br>';
//$category->title = 'NEWNEWNEW';
//R::store($category);
//echo $category->title . '<br>';

//delete
//$category = R::load('category', 8);
//R::trash($category);
//R::wipe('category');