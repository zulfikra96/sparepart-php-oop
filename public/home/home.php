<?php

require("../config.php");

$request = [':username' => $_GET['username'], ':fullname' => $_GET['fullname'], ':password' => $_GET['password']];


$karyawans = new KaryawansController;

switch ($_GET['__action']) {
    case 'create':
        $karyawans->create($request);
        break;
    case 'delete':
        $id = $_GET['id'];
        $karyawans->delete($id);
        break;
    default:
        # code...
        break;
}




header("location:http://localhost:8080/home/");