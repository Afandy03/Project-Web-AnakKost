<?php
class Admin extends Controller
{
    function __construct(){
        parent:: __construct();
        require 'models/kost_model.php';
        require 'models/user_model.php';
        require 'models/admin_model.php';
        $this->model=new Kost_model();
        $this->modelUser=new User_model();
        $this->modelAdmin=new Admin_model();
    }

    function index($nama){
        $nama = strtolower($nama);
        $action = explode('/',$nama);
        $param = explode(',',$action[1]);
        if(isset($param[1])){
            $data = $this->{$param[0]}($param[1]);
            $this->view->render($action[0]."/".$param[0],$data);
        } 
        else  {
            $data = $this->{$action[1]}();
            $this->view->render($nama,$data);
        }
    }

    function update($idKost){
        return $this->model->getKost($idKost);
    }

    function updateKost($idKost){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $this->model->namaKost=$_POST['namaKos'];
            $this->model->alamat=$_POST['alamat'];
            $this->model->noTelp=$_POST['number'];
            $this->model->namaPemilik=$_POST['nama'];
            $this->model->ukuran=$_POST['ukuran'];
            $this->model->deskripsi=$_POST['description'];
            //  $this->model->jenis=$_POST['gender'];
            $this->model->tersedia=$_POST['tersedia'];
            $this->model->harga=$_POST['harga'];
            $this->model->gambar=$_POST['fileimage'];
           // $target_dir = "image/";
            //$target_dir . basename($_FILES['fileimage']["name"]);
            // move_uploaded_file($_FILES["fileimage"]["tmp_name"], $target_file);
            // copy($this->model->gambar,'C:\xampp\htdocs\AnakKost\image');
            $cek1 = $this->model->updateKost($idKost);
            $cek2 = $this->model->updateFasilitas($_POST['barangDalam'],$_POST['namaKos'],$idKost);
        }   
    }

    function removeKost($idKost){
        $this->model->removeKost($idKost);
        header("location:".web."akun-admin_kost");  
    }

    function insert(){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $this->model->namaKost=$_POST['namaKos'];
            $this->model->alamat=$_POST['alamat'];
            $this->model->noTelp=$_POST['number'];
            $this->model->namaPemilik=$_POST['nama'];
            $this->model->ukuran=$_POST['ukuran'];
            $this->model->deskripsi=$_POST['description'];
            $this->model->jenis=$_POST['gender'];
            $this->model->tersedia=$_POST['tersedia'];
            $this->model->harga=$_POST['harga'];
            $this->model->gambar=$_POST['fileimage'];
            $cek1 = $this->model->insertKost();
            $cek2 = $this->model->insertFasilitas($_POST['wifi'],$_POST['barangDalam'],$_POST['kamarMandi'],$_POST['ac'],$_POST['namaKos']);
            if($cek1&&$cek2)header("location:".web."akun-admin_kost");
            else {
                $this->error(); 
            }
        }    
    }

    function kost(){
        return $this->modelAdmin->getKost();
    }

    function user(){
        return $this->modelAdmin->getUser();
    }

    function removeUser($idUser){
        $this->modelAdmin->removeUser($idUser);
        header("location:".web."akun-admin_user"); 
    }

    function wishlist(){
         return $this->modelAdmin->getWishlist();
    }

    function removeWishlist($variabel){
        $data = explode(',',$variabel);
        $this->modelAdmin->removeWishlist($data[0],$data[1]);
        header("location:".web."akun-admin_wishlist");   
    }

    function order(){
        return $this->modelAdmin->getOrder();
    }

    function verif($variabel){
        $data = explode(',',$variabel);
        $this->modelAdmin->verif($data[0],$data[1],$data[2]);
        header("location:".web."akun-admin_order");
    }

    function removeOrder($variabel){
        $data = explode(',',$variabel);
        $this->modelAdmin->removeOrder($data[0],$data[1]);
        header("location:".web."akun-admin_order");  
    }
}
