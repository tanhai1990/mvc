<?php
class App{

    protected $controller = "Home";
    protected $action = "SayHi";
    protected $params = [];


    function __construct(){
        $arr = $this->UrlProcess();

        //Xu ly controller
        if(file_exists("controller/".$arr[0].".php")){
            $this->controller = $arr[0];
            unset($arr[0]);
        }


        require_once "controller/".$this->controller.".php";
        $this->controller = new $this->controller;

        //Xu ly action
        if(isset($arr[1])){
            if(method_exists($this->controller, $arr[1])){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }


        //xu ly params
        if(isset($arr)){
            $this->params = array_values($arr);
        }
        else{
            $this->params = [];
        }

        
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    

    //Xu ly URL
    function UrlProcess(){
        if(isset($_GET["url"])){
            return explode("/", trim($_GET["url"]));
        }
    }
}
?>



