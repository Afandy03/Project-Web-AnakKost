<?php

class Login_model extends Model
{
    private $username="";
    private $password="";
    private $tipe="";
    public $errormessage="";

    function __construct(){
        parent:: __construct();
        require 'config/formvalidation.php';
    }
    
    function autentifikasi(){
        $sql = "SELECT * FROM login WHERE Username = '".$this->username."' ";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        $result = $sth->fetch();
        if(!$result) $this->errormessage= "Akun Belum terdaftar";
        else{
           
            $Ceknama = strcmp($result['Username'],$this->username);
            $Cekpass = strcmp($result['Password'],$this->password);
            $Cektipe = strcmp($result['Tipe'],$this->tipe);
            if($Ceknama== 0 && $Cekpass== 0 && $Cektipe== 0){
                $_SESSION["username"]=$this->username;
                $_SESSION["tipe"]=$this->tipe;
                return true;
            }
            else $this->errormessage="Login Gagal";
        }      
        return false;
    }

    function setUsername($username){
        $this->username = test_input($username);
        //  echo $this->username;
    }
    function setPassword($password){
        $this->password = test_input($password);  
        // echo  $this->password;      
    }
    function setTipe($tipe){
        $this->tipe = test_input($tipe);
        // echo   $this->tipe;
    }

    function creat(){
        $sql = "INSERT INTO login (Username, Password, Tipe) VALUES('". $this->username ."','".$this->password."','". $this->tipe."')";
        $sth = $this->db->prepare($sql);
        return $sth->execute();
    }
}
