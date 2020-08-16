<?php
class Home extends Controller{
    function SayHi(){
        $teo = $this->model("SinhVienModel");
        echo $teo->GetSV();
    }

    function Show($a, $b){
        $teo = $this->model("SinhVienModel");
        $tong = $teo->tong($a, $b);
        $this->view("SinhVienView", [
            "page"=>"news",
            "Number"=>$tong,
            "Mau"=>"red",
            "SV"=>$teo->SinhVien()
            ]);
    }
}


?>