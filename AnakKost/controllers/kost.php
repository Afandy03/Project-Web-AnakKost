<?php
class Kost extends Controller 
{
    function __construct(){
        parent:: __construct();
        require 'models/kost_model.php';
        require 'models/user_model.php';
        $this->model=new Kost_model();
        $this->modelUser=new User_model();
    }

    public $sth;    
    function viewkost($idKost){
         $this->sth=$this->model->getKost($idKost);
     }
     function index($nama){
        $nama = strtolower($nama);
        $this->view->render($nama,$this->sth);
    }

    function addwishlist($idKost){
        if(isset($_SESSION['username'])&&$_SESSION['tipe']=='user'){
            $idUser = $this->modelUser->getid($_SESSION['username']);
            $cek = $this->modelUser->cekWishlist($idKost);
            if(!$cek){
                $result = $this->modelUser->insertWishlist($idUser,$idKost);
                if($result){
                    $web = web;
                    echo "
                <script type='text/javascript'> 
                alert('Wishlist berhasil ditambah');
                window.location = '$web/kost/viewkost/$idKost';
                </script>";
                } 
            }
           else {
            $web = web;
            echo "
            <script type='text/javascript'> 
            alert('sudah ada ');
            window.location = '$web/kost/viewkost/$idKost';
            </script>"; 
           }
        }
        else if(isset($_SESSION['username'])&&$_SESSION['tipe']=='admin'){
            $web = web;
            echo "
            <script type='text/javascript'> 
            alert('hanya untuk user ');
            window.location = '$web/kost/viewkost/$idKost';
            </script>"; 
        }
        else{
            $web = web;
            echo "
            <script type='text/javascript'> 
            alert('Anda belum login');
            window.location = '$web/akun-login_user';
            </script>";
        }
    }

    function addorder($idKost){
        if(isset($_SESSION['username'])&&$_SESSION['tipe']=='user'){
            $idUser = $this->modelUser->getid($_SESSION['username']);
            $harga = $this->model->getharga($idKost);
            $result = $this->modelUser->insertOrder($idUser,$idKost,$harga);
            if($result){
                $web = web;
                echo "
                <script type='text/javascript'> 
                alert(' berhasil order');
                window.location = '$web/kost/viewkost/$idKost';
                </script>";
            } 
            else  { 
                $web = web;
                echo "
                <script type='text/javascript'> 
                alert('Order Gagal');
                window.location = '$web/kost/viewkost/$idKost';
                </script>";
            }
        }
        else if(isset($_SESSION['username'])&&$_SESSION['tipe']!='User'){
            $web = web;
            echo "
            <script type='text/javascript'> 
            alert('hanya untuk user ');
            window.location = '$web/kost/viewkost/$idKost';
            </script>"; 
        }
        else{
            $web = web;
            echo "
            <script type='text/javascript'> 
            alert('Anda belum login');
            window.location = '$web/akun-login_user';
            </script>";
        }
    }
}
