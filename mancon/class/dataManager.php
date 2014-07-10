<?php
session_start();
require 'db.inc.php';

class dataManager {
    
    public $db_conn;
    public $user_id;
    private $host = MYSQL_HOST ;
    private $db_name = MYSQL_DB;
    
    function __construct() {
        try {
        $this->db_conn = new PDO("mysql:host=$this->host;dbname=$this->db_name;",MYSQL_USER,MYSQL_PASSWORD);
        }  catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
    
    
    
    function registerUser($app_name,$team_name,$event,$email,$college,$year) {
        try {
        $query = $this->db_conn->prepare('INSERT INTO fest (app_id,app_name,team_name,event,email,college,year) VALUES (NULL,?,?,?,?,?,?);');
        $values = array($app_name,$team_name,$event,$email,$college,$year);
        $query->execute($values);
        return 1;
        }catch(PDOException $e) {
            return 0;
        }
    }
    
    function getUser($user_id) {
        $query = $this->db_conn->prepare('SELECT * FROM user WHERE user_id = ?');
        $values = array($user_id);
        $query->execute($values);
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }
    
    function checkDuplicateUser($username) {
        $query = $this->db_conn->prepare('SELECT COUNT(*) AS ct FROM user WHERE username = ?');
        $values = array($username);
        $query->execute($values);
        $obj = $query->fetch(PDO::FETCH_OBJ);
        //echo 'Object->ct :' . $obj->ct;
        if($obj->ct>= 1) return true;
        else false;
        
    }
    
    
}

?>
