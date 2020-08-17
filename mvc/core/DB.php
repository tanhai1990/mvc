<?php
class DB{
    protected $Conn;
    protected $ServerName = "localhost";
    protected $UserName = "root";
    protected $PassWord = "";
    protected $DBName = "mvc";

    function __construct(){
        $this->Conn = mysqli_connect(
            $this->ServerName, 
            $this->UserName, 
            $this->PassWord
        );
        mysqli_select_db($this->Conn, $this->DBName);
        mysqli_query($this->Conn, "SET NAMES 'utf8'");
    }
}










?>