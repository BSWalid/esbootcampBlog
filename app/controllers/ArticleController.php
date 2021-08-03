<?php



namespace App\Controllers;

use App\https\HttpRequest;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Controller;
use Illuminate\Database\Capsule\Manager as DB;

class ArticleController extends Controller 
{

      public function index(){

              $articles = Article::all();
      return $this->view('articles/index.twig',compact('articles'));
          
      }
      

      public function create()
      {
              //returns create view

              $categories = Category::all();
      return $this->view('articles/create.twig',compact('categories'));


      }
      public function store(HttpRequest $httpRequest)
      {       

              $fields = $httpRequest->all(); 
              //this will be replace by the logged User
            
              
              //ramsey/uuid package
               $article=Article::create([
                "title"=>$fields['title'],
                "sub_title"=>$fields['sub_title'],
                "body"=>$fields['body'],
                "user_id"=>20

              ]);

        
        
           
              DB::table('category_articles')->insert([
                'article_id' => $article->id,
                'category_id' => $httpRequest->name('category_id'),
              ]);

              header("Location:/EsBootCamp-Blog/dashboard/articles");
        

      }

      public function delete($id)
      {
        $article = Article::where('article_id',$id);
        $article_from_category = DB::table('category_articles')->where('article_id',$id);
        
        $article_from_category->delete();
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