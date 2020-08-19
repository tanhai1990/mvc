<?php
class Register extends Controller{
    public function SayHi(){
        $this->view("master1",[
            "page"=>"register"
        ]);
    }


    public function KhachHangDangKi(){
        if(isset($_POST["btnRegister"])){
            $UserName = $_POST["UserName"];
            $PassWord = $_POST["PassWord"];
            $PassWord = password_hash($PassWord, PASSWORD_DEFAULT);
            $Email = $_POST["Email"];
            $Address = $_POST["Address"];


            echo $PassWord;
        }
    }
}


?>