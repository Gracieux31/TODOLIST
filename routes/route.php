<?php

if(isset($_GET['action'])){
    $request = $_GET['action'];

    if($request == 'home'){$route = "HomeController@indexAction";}
    if($request == 'login'){$route = "UserController@loginAction";}
    if($request == 'logout'){$route = "UserController@logoutAction";}
    if($request == 'register'){$route = "UserController@registerAction";} 
    if($request == 'todolist'){$route = "AppController@todolistAction";} 
    if($request == 'editTodolist'){$route = "AppController@todolistAction";}         
} 