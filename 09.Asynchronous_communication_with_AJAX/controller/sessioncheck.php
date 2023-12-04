<?php 
    session_start();
    if(!isset($_SESSION['flag'])){
        return true;
    }
?>