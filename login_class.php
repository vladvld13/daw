<?php


class Login{

    private $error = '';

    function check($data){

        $email = $data['email'];
        $parola = $data['password'];

        $query = "select * from clients where email = '$email' limit 1";

        $DB = new database();
        $answer = $DB->read($query);

        if($answer){

            $row = $answer[0];

            if($parola == $row['parola']){

                $_SESSION['email'] = $row['email'];
                $_SESSION['nume'] = $row['nume'];
                $_SESSION['prenume'] = $row['prenume'];
                $_SESSION['role'] = $row['role'];

            }
            else{
                $this->error .= "Wrong password";

            }

        }
        else{

            $this->error .= "No email found";
        }
        return $this->error;

    }

    public function check_if_user_login($email){

        $query = "select email from clients where email = '$email' limit 1";

        $DB = new database();
        $answer = $DB->read($query);

        if ($answer){
            return true;
        }
        else{
            return false;
        }
        


    }

}