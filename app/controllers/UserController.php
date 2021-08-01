<?php



namespace App\Controllers;
use Controller;
use App\Models\User;
use App\https\HttpRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;

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

      public function delete()
      {
              //delete record from database
      }
      public function edit($id)
      {         
               
            $user = User::where('user_id',$id)->first();     
            return $this->view('users/update.twig',['user'=>$user]);

      }

      public function update(HttpRequest $httpRequest )
      {
             //update record in database 
      }



}