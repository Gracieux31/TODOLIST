<?php
class HomeModel{
    public $db;

    public function checkUserLogin($username, $password){
        $query = "SELECT * FROM tbl_users WHERE username ='{$username}' AND password ='{$password}'";
        $stmt = $this->db->prepare($query)->execute();
        return $stmt;

        
    }
}