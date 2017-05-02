<?php

class KaryawansController extends helper{


  public function create($request)
  {
    require $this->base_path("/config/db.php");
    
    try {
        $insert = $db->prepare("INSERT INTO karyawans(fullname,username,password) VALUES(:fullname,:username,:password)");
       return $insert->execute($request);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
  }

  public function fetching()
  {
    require $this->base_path("/config/db.php");
    try{
      $fetching = $db->prepare("SELECT * FROM karyawans");
      $fetching->execute();
      return $fetchData = $fetching->fetchAll();

    }catch(PDOException $e){
      die($e->getMessage());
    }
    
  }

  public function delete($request)
  {
    require $this->base_path("/config/db.php");
    try{
        $delete = $db->prepare("DELETE FROM karyawans WHERE id={$request}");
        $delete->execute();
    }catch(PDOException $e){
        die($e->getMessage());
    }
    
  }

}
