<?php

class Login extends Controller
{
    function __construct(){
        parent:: __construct();
        require 'models/login_model.php';
        $this->model=new Login_model();
        // echo 'This is Login controller <br>';
    }    

    function autentifikasi($tipe){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $this->model->setUsername($_POST['username']);
            $this->model->setPassword($_POST['password']);
            $this->model->setTipe($tipe);
            $cek = $this->model->autentifikasi();
            if($cek)header("location:".web."index");
            else {
                $this->error($this->model->errormessage); 
            }
        }
        else {
            header("location:".web."login_".$tipe);
        }
        // $this->view->render('index');
    }

    function error($msgErr){
        $this->view->error($msgErr);
    }

    function logout(){
        if(isset($_SESSION['username'])){
            unset($_SESSION);
            session_destroy();
            header("location:".web."index");
         }
    }


}
