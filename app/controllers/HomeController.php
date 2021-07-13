<?php

namespace App\Controllers;

use Controller;

class HomeController extends Controller{


        public function index(){
                return $this->view('home.twig',[
                                                 'article'=>"article of fattah"]);
            
        }


        
        public function categoryFullPage($id){

            
        }

        public function singleArticleShow($id){

            echo"this is a parameter sent from routing  ".$id;
        }
}