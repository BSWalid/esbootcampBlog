<?php


namespace App\Controllers;
use Controller;
use App\Models\User;
use App\https\HttpRequest;


class UserController extends Controller 
{

      public function index(){

              $users = User::all();
      return $this->view('users/index.twig',compact('users'));
          
      }

      public function create()
      {
              //returns create view
      return $this->view('users/create.twig');


      }
      public function store(HttpRequest $httpRequest)
      {       

              $fields = $httpRequest->all(); 
              
              //ramsey/uuid package
              User::create($fields);
              


              header("Location:/EsBootCamp-Blog/dashboard/users");
        

      }

      public function delete($id)
      {
        $user = User::where('user_id',$id);
        $user->delete();
        
        header("Location:/EsBootCamp-Blog/dashboard/users");
      }
      public function edit($id)
      {         
               
            $user = User::where('user_id',$id)->first();     
            return $this->view('users/update.twig',['user'=>$user]);

      }

      public function update(HttpRequest $httpRequest)
      {
        $fields = $httpRequest->all();
        
        
        $user=  User::where('user_id',$httpRequest->name('user_id'))->update($fields);
        
        // echo '<pre>' . var_export($user, true) . '</pre>';
        // die();
        
        
        header("Location:/EsBootCamp-Blog/dashboard/users");
      }



}