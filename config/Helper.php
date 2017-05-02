<?php

class Helper{

    public function base_path($url)
    {
        if($_SERVER['HTTP_HOST'] == 'localhost')
        {
            return $_SERVER['DOCUMENT_ROOT'].'/Sparepart'.$url;            
        }else{
            return $_SERVER['DOCUMENT_ROOT'].'/../'.$url;  
        }
    }

    public function view($view)
    {
        require_once "../views/".$view.".php";
    }

    public function url($url)
    {   
        return 'http://'.$_SERVER['REMOTE_ADDR'].'/Sparepart/'.$url;                           
    }

}

    
    
    


