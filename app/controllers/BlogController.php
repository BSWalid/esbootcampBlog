<?php 


namespace App\Controllers;
use Controller;



class BlogController extends Controller 
{

    public function index(){

             return $this->view('blog/index.twig');
      
          
      }

      public function create()
      {
              return $this->view('blog/create.twig');

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