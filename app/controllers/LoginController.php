<?php



namespace App\Controllers;

use App\https\HttpRequest;
use App\Models\User;
use Controller;
use App\helper\LoginHelper;


class LoginController extends Controller 
{

      public function index(){
        if(isset($_SESSION['auth'])){
        header("Location:/EsBootCamp-Blog/dashboard");
            return;

        }
      return $this->view('Login/login.twig');
          
      }
      

 

      public function login(HttpRequest $httpRequest)
      {
        $username = $httpRequest->name('username');
        $password = $httpRequest->name('password');

        $user = User::where('username',$username)->first();

        if(!isset($user)){
            $error = "User not found";
            return $this->view('Login/login.twig',compact('error'));
        }

        if (password_verify($password,$user->password)){

            $_SESSION['auth']= $user->user_id;

        header("Location:/EsBootCamp-Blog/dashboard");



        }
        $error = " password wrong";
        return $this->view('Login/login.twig',compact('error'));

      }


      public function logout(HttpRequest $httpRequest){
        
        unset($_SESSION['auth']);
        header("Location:/home");


      }



}