<?php

class AppController{
    public $model;

    public function todolistAction(){
        return require_once('../view/todolist.php');
    }
}