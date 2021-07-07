<?php

namespace App\Controllers;

use Controller;

class HomeController extends Controller{


        public function index(){
                return $this->view('home.twig',[
                                                 'article'=>"article of fattah"]);
            
        }


        
        public function show(){

            echo "from controller show method";
        }

        public function showwithID($id){

            echo"this is a parameter sent from routing  ".$id;
        }
}