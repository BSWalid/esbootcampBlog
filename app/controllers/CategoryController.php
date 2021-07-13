<?php

namespace App\Controllers;


use Controller;
use App\Models\Category;

class CategoryController extends Controller{


        public function index(){
          $categories = Category::all();
          echo "<pre>.$categories</pre> ";
                return $this->view('categories/index.twig',compact('categories'));
            
        }

        public function create()
        {
        
                return $this->view('createArticle.twig');   

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