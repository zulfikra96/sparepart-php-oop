<?php

class Helper{

    public function base_path($url)
    {
        return $_SERVER['DOCUMENT_ROOT'].'/Sparepart/'.$url;
    }

    public function view($view)
    {
        require_once "../views/".$view.".php";
    }

    public function url($url)
    {
        return 'http://'.$_SERVER['REMOTE_ADDR']."/Sparepart".$url;
    }

}

    
    
    


