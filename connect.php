<?php

class Database{

    // private $host = "localhost"; 
    // private $username = "root";
    // private $password = "123";
    // private $db = "triptastic_db";

    private $host = "92.205.171.217"; 
    private $username = "vancuta";
    private $password = "vlad3456v";
    private $db = "triptastic_db";
    

    function connect(){

    $connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    return $connection;

    }

    function read($query){

        $conn = $this->connect();
        $result=mysqli_query($conn,$query);

        if(!$result){
            return false;
        }
        else{
            $data = false; // data = array -> pentru cazul cand vreau sa citesc mai multe randuri din db
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row; 
            }
            return $data;
            

        }

    }

    function save($query){
        
        $conn = $this->connect();
        $result=mysqli_query($conn,$query);

        if(!$result){
            return false;
        }
        else{
            return true;
        }

        
    }

    function execute_query($query){

        $conn = $this->connect();
        $result=mysqli_query($conn,$query);

        if(!$result){
            return false;
        }
        else{
            $data = false; // data = array -> pentru cazul cand vreau sa citesc mai multe randuri din db
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row; 
            }
            return $data;
            

        }

    }

    function delete($email){
        $conn = $this->connect();
        $query = "delete from clients where email = '$email'";
        $result=mysqli_query($conn,$query);
        return true;


    }

}
