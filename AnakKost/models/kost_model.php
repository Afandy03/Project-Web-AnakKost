<?php
class Kost_model extends Model
{
    private $idKost;
    public $namaKost;
    public $alamat;
    public $noTelp;
    public $namaPemilik;
    public $ukuran;
    public $deskripsi;
    public $jenis;
    public $tersedia;
    public $harga;
    public $gambar;
    
    function __construct(){
        parent:: __construct();
    }

    function setKost($idKost){
        $this->idKost = $idKost;
    }

    function insertKost(){
        $sql = "INSERT INTO kost (idKost, namaKost, alamat, noTelp, namaPemilik, ukuran, deskripsi, jenis, tersedia, harga, gambar) 
        VALUES('null','".$this->namaKost."','". $this->alamat."','".$this->noTelp.
        "','".$this->namaPemilik."','".$this->ukuran."','".$this->deskripsi."','".$this->jenis.
        "','".$this->tersedia."','".$this->harga."','".$this->gambar."')";
        $sth = $this->db->prepare($sql);
        //echo $sql."<br>";
        return $sth->execute();
    }

    function insertFasilitas($wifi,$barangDalam,$kamarMandi,$ac,$namaKost){
        $sql = "SELECT idKost FROM kost WHERE namaKost = '".$namaKost."' ";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        $result = $sth->fetch();

        $sql = "INSERT INTO fasilitas (idFasilitas, wifi, barangDalam, kamarMandi, ac, idKost) VALUES ('null','"
        .$wifi."','".$barangDalam."','".$kamarMandi."','".$ac."','".$result['idKost']."')";
        $sth = $this->db->prepare($sql);
       // echo $sql;
        return $sth->execute();
    }

    function removeKost($idKost){
        $sql = "DELETE FROM kost WHERE idKost = '".$idKost."'";
        $sth = $this->db->prepare($sql);
        return  $sth->execute();
    }

    function getidKost(){
        if(isset($this->idKost)){
            return $this->idKost;
        }
        return '';
    }

    function getharga($idKost){
        $sql = "SELECT harga FROM kost WHERE idKost = '".$idKost."' ";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        $result = $sth->fetch();
        $this->harga =$result['harga'];
        return $this->harga;
    }

    function getKost($idKost){
        $sql = "SELECT * FROM kost AS k,(SELECT * FROM fasilitas WHERE idKost = '".$idKost."') AS f WHERE k.idKost='".$idKost."'" ; 
        $sth = $this->db->query($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Kost_model');
        return  $sth;
    }

    function updateKost($idKost){
        $sql = "UPDATE kost SET namaKost ='".$this->namaKost."',alamat= '". $this->alamat."',noTelp='".$this->noTelp.
        "',namaPemilik='".$this->namaPemilik."',ukuran='".$this->ukuran."',deskripsi='".$this->deskripsi.
        "',tersedia='".$this->tersedia."',harga='".$this->harga."',gambar='".$this->gambar."' WHERE idKost = '".$idKost."'";
        $sth = $this->db->prepare($sql);
        //echo $sql;
       return  $sth->execute();
    }
    function updateFasilitas($barangDalam,$namaKost,$idKost){
        $sql = "UPDATE fasilitas SET barangDalam ='".$barangDalam."'WHERE idKost = '".$idKost."'";
        $sth = $this->db->prepare($sql);
       // echo $sql;
       return  $sth->execute();
    }

}
