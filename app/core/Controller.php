<?php
namespace app\core;
use app\views;

class Controller{
     public function load($viewName, $viewData=array(),  $viewData2 = ""){
        extract($viewData); 
        include "app/views/" . $viewName .".php";
   }

}
