<?php

class SinhVienModel extends DB{
    public function GetSV(){
        return "Nguyen Van Teo";
    }

    public function tong($n, $m){
        return $n + $m;
    }

    public function DSSinhVien(){
        $sql= "
            SELECT * FROM sinhvien;
        ";
        return mysqli_query($this->Conn, $sql);
    }
}










?>