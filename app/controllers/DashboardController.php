<?php

namespace App\Controllers;

use Controller;

class DashboardController extends Controller{


        public function index(){
                return $this->view('dashboard.twig');
            
        }


        
        public function show(){

            echo "from controller show method";
        }

        public function showwithID($id){

            echo"from controller with an id so yayay    ayay ".$id;
        }
}