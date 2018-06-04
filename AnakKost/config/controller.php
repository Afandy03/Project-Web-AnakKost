<?php

class Controller 
{
    function __construct(){
        // echo "This is main controller <br>";
        $this->view = new View();
    }

    function indexHeader(){
        $this->view->renderHeader();
    }
    function indexFooter(){
        $this->view->renderFooter();
    }
    function index($nama){
        $nama = strtolower($nama);
        $this->view->render($nama);
    }
}
