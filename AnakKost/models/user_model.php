<?php

class User_model extends Model
{
    private $id;
    public $gender;
    public $nama;
    public $email;
    public $noTelp;
    public $username;

    function __construct(){
        parent:: __construct();
        // require 'config/formvalidation.php';
    }
    function creat(){
       $sql = "INSERT INTO user (idUser, jenisKelamin, nama, email, noTelp, Username) VALUES('null','". $this->gender ."','".$this->nama."','". $this->email."','".$this->noTelp."','".$this->username."')";
       $sth = $this->db->prepare($sql);
       return $sth->execute();
    }

    function updateLogin($username,$password){
        $sql = "UPDATE login SET `Password` ='".$password."' WHERE Username = '".$username."'";
        $sth = $this->db->prepare($sql);
       return  $sth->execute();
    }

    function updateUser($idUser){
        $sql = "UPDATE user SET nama ='".$this->nama."',email='".$this->email."',noTelp='".$this->noTelp.
        "' WHERE idUser = '".$idUser."'";
        $sth = $this->db->prepare($sql);
       return  $sth->execute();
    }


    function getProfil($id,$username){
        $sql = "SELECT * FROM user AS u,(SELECT * FROM login WHERE Username = '".$username."') AS f WHERE u.idUser='".$id."'" ; 
        $sth = $this->db->query($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'User_model');
        return  $sth;
    }

    function getid($username){
        $sql = "SELECT idUser FROM user WHERE Username = '".$username."' ";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        $result = $sth->fetch();
        $this->id =$result['idUser'];
        return $this->id;
    }
    function insertWishlist($idUser,$idKost){
        $sql = "INSERT INTO wishlist (idKost,idUser) VALUES('".$idKost."','".$idUser."')";
        $sth = $this->db->prepare($sql);
        return $sth->execute();
    }

    function cekWishlist($idKost){
        $sql = "SELECT idUser FROM wishlist WHERE idKost ='".$idKost."' and idUser ='".$this->id."'" ;
        $sth = $this->db->prepare($sql);
        $sth->execute();
        return  $sth->fetch();
    }
    function getWishlist(){
        $sql = "SELECT * FROM kost AS k,(SELECT idKost FROM wishlist WHERE idUser='".$this->id."')AS w WHERE k.idKost = w.idKost" ;
        $sth = $this->db->query($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Kost_model');
        return  $sth;
    }
    function removeWishlist($idKost){
        $sql = "DELETE FROM wishlist WHERE idKost = '".$idKost."'AND idUser ='".$this->id."'";
        $sth = $this->db->prepare($sql);
        return  $sth->execute();
    }

    function insertOrder($idUser,$idKost,$harga){
        $date= date("Y-m-d");
        $sql = "INSERT INTO `order` (idTransaksi, tglOrder, harga, status, idUser, idKost) VALUES('null','".$date."','".$harga."','0','".$idUser."','".$idKost."')";
        $sth = $this->db->prepare($sql);
        return  $sth->execute();
    }

    function getOrder(){
        $sql = "SELECT * FROM kost AS k,(SELECT * FROM `order` WHERE idUser='".$this->id."')AS w WHERE k.idKost = w.idKost" ; 
        // $sql = "SELECT * FROM `order` WHERE idUser='".$this->id."'" ;
        $sth = $this->db->prepare($sql);
        return  $sth;
    }

    function removeOrder($idKost){
        $sql = "DELETE FROM `order` WHERE idKost = '".$idKost."'AND idUser ='".$this->id."'";
        $sth = $this->db->prepare($sql);
        return  $sth->execute();
    }


}
