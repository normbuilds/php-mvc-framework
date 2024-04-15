<?php
class Controller{
 public function loadView($name){
   
        $fileName = './app/views/' . $name.'.view.php';
        if(file_exists($fileName)){
            require $fileName;
        }else{
            require './app/views/404.view.php';
        }
 }   
}