<?php 


namespace App\helper;
class LoginHelper {



    public static function auth(){

        if(isset($_SESSION['auth'])){


            return True;
        }else {

            return False;
        }
    }






}