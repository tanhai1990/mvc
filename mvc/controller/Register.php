<?php
class Register extends Controller{
    public function SayHi(){
        $this->view("master1",[
            "page"=>"register"
        ]);
    }
}


?>