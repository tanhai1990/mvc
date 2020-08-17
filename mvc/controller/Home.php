<?php
class Home extends Controller{

    public $CategoryModel;
    public $AdsModel;

    public function __construct(){
        //$this->$CategoryModel = $this->model("CategoryModel");
        //$this->AdsModel = $this->model("AdsModel");
    }

    function SayHi(){
        $teo = $this->model("SinhVienModel");
        $this->view("master1",[
            "page"=>"home"
        ]);
    }


}













?>