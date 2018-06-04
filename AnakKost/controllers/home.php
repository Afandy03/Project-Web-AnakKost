<?php

class Home extends Controller 
{
    function __construct(){
        parent:: __construct();
        require 'models/kost_model.php';
        $this->model=new Kost_model();
    }
    
    function viewkost(){
       $sth = $this->model->db->query("SELECT * FROM kost ORDER BY idKost DESC");
       $sth->setFetchMode(PDO::FETCH_CLASS, 'Kost_model');
    //    $this->model = $sth->fetch();
    //    for($i=0; $row = $sth->fetch(); $i++){
    //     echo $row->getidKost()." - ".$row->namaKost."<br/>";
    //   }
        return $sth;
    }

    function index($nama){
        $nama = strtolower($nama);
        $this->view->render($nama,$this->viewkost());
    }

}
