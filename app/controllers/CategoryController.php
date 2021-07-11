<?php

namespace App\Controllers;


use Controller;
use App\Models\Category;

class CategoryController extends Controller{


        public function index(){
          $categories = Category::all();
          echo "<pre>.$categories</pre> ";
                return $this->view('index.twig',compact('categories'));
            
        }


        
      
}