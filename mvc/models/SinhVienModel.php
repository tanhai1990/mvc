<?php 
class SinhVienModel extends DB{
    public function GetSV(){
        return "Nguyen Van Teo";
    }

    public function tong($a, $b){
        return $a + $b;
    }

    public function SinhVien(){
        $sql = "
            SELECT * FROM sinhvien
        ";
        return mysqli_query($this->Conn, $sql);
    }


}
?>