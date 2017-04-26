<?php


try{
        define('username','root');
        define('password','');
        $db = new PDO('mysql:host=localhost;dbname=sparepart',username, password);
        


}catch(PDOException $e)
{
    die($e->getMessage());
}