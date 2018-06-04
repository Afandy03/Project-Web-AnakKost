<?php

class Core
{
    function __construct(){
        $url = isset($_GET['url'])? $_GET['url']:null ;
        $url = rtrim($url,'/');
        $url = explode('/',$url);

        // print_r($url);
        
        if(empty($url[0])||strcmp($url[0],'index')==0){
           $url[0]='home';
        }

        $folderViews = explode('_',$url[0]);
        $folderControl= explode('-',$folderViews[0]);
        $ctrl ="";
        if(isset($folderControl[1])){
            $file = 'controllers/'.$folderControl[0].'/'.$folderControl[1].'.php';
            $ctrl =$folderControl[1];
            // $pathView=$folderControl[0].'/'.$folderControl[1];
        }
        else {
            $file = 'controllers/'.$folderControl[0].'.php';
            $ctrl =$folderControl[0];
            // $pathView=$folderControl[0];
        }
        if(file_exists($file)){
            require $file;
        }
        else{
            echo "error FILE NOT FOUND";
            return false;
        }
        
        $controller = new $ctrl;
        $controller->indexHeader();
        //method
       
        if(isset($url[1])){
            if(method_exists($controller,$url[1])){
                if(isset($url[2])){
                    $controller->{$url[1]}($url[2]);
                }
                else{
                    $controller->{$url[1]}();
                } 
                
            }
            else{
                // echo "error";
                // return false;
            }         
        }
        if(isset($folderViews[1])){
            $controller->index($ctrl."/".$folderViews[1]);
        }
        else {
            $controller->index($ctrl);
        }
        $controller->indexFooter();
        
    }



}





?>