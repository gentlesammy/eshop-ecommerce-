<?php

    trait Routeguard{
        private function adminOnly(){
            if(!isset($_SESSION['admin']) && $_SESSION['admin_logged'] != true){
                header('location:../../index.php');
                exit();
            }
        }





    }





?>