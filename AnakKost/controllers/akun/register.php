<?php
class Register extends Controller
{
    private $user;
    function __construct(){
        parent:: __construct();
        require 'models/login_model.php';
        $this->model_login=new Login_model();
         require 'models/user_model.php';
        $this->model_user=new User_model();
    }

    function creatLogin(){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $this->model_login->setUsername($_POST['username']);
            $this->model_login->setPassword($_POST['password']);
            $this->model_login->setTipe("user");
            $cek = $this->model_login->creat();
             if($cek)header("location:".web."akun-register_nextregis/setUSer/".$_POST['username']);
            else {
                $this->error(); 
            }
        }
        else {
        header("location:".web."akun-register");
        }
    }

    function index($nama){
        $nama = strtolower($nama);
        $this->view->render($nama,$this->user);
    }

    function creatUser($user){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $this->model_user->nama=$_POST['nama'];
        $this->model_user->email=$_POST['email'];
        $this->model_user->gender=$_POST['gender'];
        $this->model_user->noTelp=$_POST['number'];
        $this->model_user->username=$user;
        echo $this->user;
        $cek = $this->model_user->creat();
        if($cek)header("location:".web."akun-login_user");
        else {
            $this->error(); 
        }
    }
    else {
        header("location:".web."akun-register_nextregis/setUSer/".$this->user);
        }
    }

    function setUser($user){
        $this->user=$user;
    }

    function error(){
        $this->view->error("profil akun gagal diisi");
    }
}