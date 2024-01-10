<?php

class Signup{

    private $error = '';

    public function evaluate($data){

        foreach ($data as $key => $value) {
            if(strlen($value) == 0){
                $this->error = $this->error . "Empty " . $key . "!!!<br>";
            }

            if($key == 'email'){
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->error = $this->error . "Invalid email format"; 
                  }
            }

            if($key == 'first_name'){
                if (is_numeric($value)) {
                    $this->error = $this->error . "Invalid first name"; 
                  }
            }

            if($key == 'second_name'){
                if (is_numeric($value)) {
                    $this->error = $this->error . "Invalid second name"; 
                  }
            }

            if($key == 'password'){
                if (strlen($value)<8) {
                    $this->error = $this->error . "Invalid password length"; 
                  }
            }


        }

        if($this->error == ''){

            $email = $data['email'];

            if($this->check_if_entry_in_database_is_unique($data)){
                $this->create_user($data);
            }
            else{
                print_r("It is already an entry in the database with this email: $email");
            }

        }
        else{
            return $this->error;
        }

    }

    public function create_user($data){

        $nume = $data['first_name'];
        $prenume = $data['second_name'];
        $email = $data['email'];
        $parola = $data['password'];

        $query = "insert into clients (nume, prenume, email, parola) values ('$nume', '$prenume', '$email', '$parola')";
        $DB = new database();
        $DB->save($query);

    }

    public function check_if_entry_in_database_is_unique($data){

         $key = $data['email'];
         $query = "select * from clients where email = '$key'";

         $DB = new database();
         $result = $DB->read($query);

        if(!$result){
            return true;
        }
        else{
            return false;
        }



    }



}

?>