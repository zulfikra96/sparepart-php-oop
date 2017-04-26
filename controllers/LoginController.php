<?php
session_start();


class LoginController extends Helper{

    public $error;


    public function __construct()
    {
        $this->error = null;
        
    }

    public function login($user,$pass)
    {
        
        require $this->base_path("/config/db.php");

        try{
            $select = $db->prepare("SELECT * FROM karyawans WHERE username='{$user}'");
            $select->execute();
            $fetchRow = $select->fetch(PDO::FETCH_ASSOC);

            if($fetchRow['username'])
            {
                if($fetchRow['password'] == $pass)
                {
                    $fetch = $_SESSION;
                    header("location:../home/");
                }
                else{
                    $this->error = "maaf username atau password anda salah";
                }
            }
            else{
                echo "gagal";
            }
        }catch(PDOException $e){
            die($e->getMessage);
        }
    }

}