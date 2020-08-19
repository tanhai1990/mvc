<?php

class UserModel extends DB{

    public function InsertNewUser($username, $password, $email, $address){
        $sql = "
            INSERT INTO users VALUES(null, $username, $password, $email,  $address)
        ";
        mysqli_query($this->Conn, $sql);
    }
}















?>