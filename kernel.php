<?php
session_start();
include_once(__DIR__.'/config.php');
include_once(__DIR__.'/connection/db.php');

spl_autoload_register(function ($class){
    if(file_exists(__DIR__.'/controller/'.$class.'.php')){
        require __DIR__.'/controller/'.$class.'.php';
    }

    if(file_exists(__DIR__.'/model/'.$class.'.php')){
        require __DIR__.'/model/'.$class.'.php';
    }
});

$db =  Connection::connect($config);

$load_new = new HomeController();
$model = new HomeModel();
$load_new->model=$model;
$model->db = $db;
$index = $load_new->indexAction();