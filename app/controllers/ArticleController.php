<?php



namespace App\Controllers;

use App\https\HttpRequest;
use App\Models\User;
use App\Models\Article;

use Controller;



class ArticleController extends Controller 
{

      public function index(){

              $articles = Article::all();
      return $this->view('articles/index.twig',compact('articles'));
          
      }
      

      public function create()
      {
              //returns create view
      return $this->view('articles/create.twig');


      }
      public function store(HttpRequest $httpRequest)
      {       

              $fields = $httpRequest->all(); 
              //this will be replace by the logged User
              $fields['user_id']= 20;
              
              //ramsey/uuid package
              Article::create($fields);
              


              header("Location:/EsBootCamp-Blog/dashboard/articles");
        

      }

      public function delete($id)
      {
        $article = Article::where('article_id',$id);
        $article->delete();
        
        header("Location:/EsBootCamp-Blog/dashboard/articles");
      }
      public function edit($id)
      {         
               
            $article = Article::where('article_id',$id)->first();     
            return $this->view('articles/update.twig',['article'=>$article]);

      }

      public function update(HttpRequest $httpRequest)
      {
        $fields = $httpRequest->all();
        
        
        $article=  Article::where('article_id',$httpRequest->name('article_id'))->update($fields);
        
        // echo '<pre>' . var_export($user, true) . '</pre>';
        // die();
        
        
        header("Location:/EsBootCamp-Blog/dashboard/articles");
      }



}