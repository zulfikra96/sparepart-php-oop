<?php


try{
        define('username','root');
        define('password','');
        $db = new PDO('mysql:host=127.0.0.1;dbname=sparepart',username, password);
        


}catch(PDOException $e)
{
    die($e->getMessage());
}