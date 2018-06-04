<?php

class Admin_model extends Model
{
    function __construct(){
        parent:: __construct();
        // require 'config/formvalidation.php';
    }

    function getOrder(){
        $sql = "SELECT * FROM kost AS k,(SELECT * FROM user)AS s,(SELECT * FROM `order`)AS o WHERE o.idKost = k.idKost AND o.idUser = s.idUser " ; 
        // $sql = "SELECT * FROM `order` WHERE idUser='".$this->id."'" ;
        $sth = $this->db->prepare($sql);
        return  $sth;
    }

    function removeOrder($idUser,$idKost){
        $sql = "DELETE FROM `order` WHERE idKost = '".$idKost."'AND idUser ='".$idUser."'";
        $sth = $this->db->prepare($sql);
        return  $sth->execute();
    }

    function verif($idUser,$idKost,$value){
        $sql = "UPDATE `order` SET status ='".$value."' WHERE idKost = '".$idKost."' AND idUser = '".$idUser."'";
        $sth = $this->db->prepare($sql);
        return  $sth->execute();
    }
    
    function getWishlist(){
        $sql = "SELECT * FROM kost AS k,(SELECT * FROM user) AS s,(SELECT * FROM wishlist ) AS o WHERE o.idKost = k.idKost AND o.idUser = s.idUser" ; 
        $sth = $this->db->prepare($sql);
        return  $sth;
    }

    function removeWishlist($idUser,$idKost){
        $sql = "DELETE FROM wishlist WHERE idKost = '".$idKost."'AND idUser ='".$idUser."'";
        $sth = $this->db->prepare($sql);
        return  $sth->execute();
    }

    function getUser(){
        $sql = "SELECT * FROM user AS u ,(SELECT * FROM login WHERE tipe='user') AS l WHERE l.Username = u.Username" ; 
        $sth = $this->db->prepare($sql);
        return  $sth;
    }

    function removeUser($idUser){
        $sql = "SELECT * FROM user WHERE idUser ='".$idUser."'";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        $row= $sth->fetch();
        $sql = "DELETE FROM login WHERE Username = '".$row['Username']."'";
        $sth = $this->db->prepare($sql);
        return  $sth->execute();
    }

    function getKost(){
        $sql = "SELECT * FROM kost ORDER BY idKost DESC" ; 
        $sth = $this->db->query($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Kost_model');
        return  $sth;
    }

}
