<?php

namespace App\Controllers;


use Controller;
use App\Models\Category;

class CategoryController extends Controller{


        public function index(){
          
                return $this->view('categories/index.twig');
            
        }

        public function create()
        {
        
                return $this->view('categories/create.twig');

        }
        public function store()
        {
                //store record in database
        }

        public function delete()
        {
                //delete record from database
        }
        public function edit()
        {
              //return edit view  
        }

        public function update()
        {
               //update record in database 
        }
     


        
      
}