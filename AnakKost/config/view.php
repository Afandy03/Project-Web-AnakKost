<?php
class view 
{
    function __construct(){
        session_start();
    }


    public function renderHeader(){
        require 'views/header/default-head.php';
        if(isset($_SESSION['username'])){
            if(strcmp($_SESSION['tipe'],'user')==0)
                require 'views/header/header_login_user.php';
            if(strcmp($_SESSION['tipe'],'admin')==0)
                require 'views/header/header_login_admin.php';
        }
        else {
            require 'views/header/header.php';
        }
    }
    public function render($nama,$variabel=false){
        require 'views/'.$nama.'/index.php';
    }
    public function renderFooter(){
        require 'views/footer.php';
       
    }
    
    public function error($msgErr){
            echo "<span style='padding:20px;color:red;'> $msgErr </span>";
    }
}
