<?php

function __autoload($class_name) {  
   include __DIR__.'/../config/'.$class_name . '.php';  
 }  




$helper = new Helper();
