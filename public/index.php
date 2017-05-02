<?php

if(isset($_SESSION)){
    header("location:home");
}else{
    header("location:login");
}