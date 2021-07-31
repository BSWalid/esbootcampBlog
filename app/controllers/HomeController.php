<?php

namespace App\Controllers;

use Controller;

class HomeController extends Controller{


        public function index(){
                return $this->view('home.twig',);
            
        }


        
        public function categoryFullPage($id){

            
        }

        public function singleArticleShow($id){

            echo"this is a parameter sent from routing  ".$id;
        }
}