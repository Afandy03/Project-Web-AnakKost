<?php
class User extends Controller
{
    function __construct(){
        parent:: __construct();
        require 'models/kost_model.php';
        require 'models/user_model.php';
        $this->model=new Kost_model();
        $this->modelUser=new User_model();
    }

    function wishlist(){
        $idUser = $this->modelUser->getid($_SESSION['username']);
        return $this->modelUser->getWishlist();
    }

    function profil($username){
        $idUser = $this->modelUser->getid($username);
        return $this->modelUser->getProfil($idUser,$username);
    }

    function updateProfil($username){
        $idUser = $this->modelUser->getid($username);
        return $this->modelUser->getProfil($idUser,$username);
    }
    function update($username){
        $idUser = $this->modelUser->getid($username);
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $this->modelUser->nama=$_POST['nama'];
            $this->modelUser->email=$_POST['email'];
            $this->modelUser->noTelp=$_POST['number'];
            // $this->modelUser->username=$_POST['username'];
            $cek1= $this->modelUser->updateLogin($username,$_POST['password']);
            $cek2= $this->modelUser->updateUser($idUser);
            if($cek1&&$cek2) header("location:".web."akun-user_profil,$username");
            else echo "gagal";
        }
    }

    function index($nama){
        $nama = strtolower($nama);
        $action = explode('/',$nama);
        if(isset($action[1])) $param = explode(',',$action[1]);
        if(isset($param[1])){
            $data = $this->{$param[0]}($param[1]);
            $this->view->render($action[0]."/".$param[0],$data);
        } 
        else if(isset($action[1])) {
            $data = $this->{$action[1]}();
            $this->view->render($nama,$data);
        }
        else{
           
        }
    }

    function removeWishlist($idKost){
        $idUser = $this->modelUser->getid($_SESSION['username']);
        $this->modelUser->removeWishlist($idKost); 
        header("location:".web."akun-user_wishlist");  
    }

    function order(){
        $idUser = $this->modelUser->getid($_SESSION['username']);
        return $this->modelUser->getOrder();
    }
    function removeOrder($idKost){
        $idUser = $this->modelUser->getid($_SESSION['username']);
        $this->modelUser->removeOrder($idKost);
        header("location:".web."akun-user_order");   
    }
}
