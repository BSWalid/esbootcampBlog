<?php


namespace App\Controllers;
use Controller;
use App\Models\Category;
use App\https\HttpRequest;
use Illuminate\Database\Capsule\Manager as DB;


class CategoryController extends Controller 
{

      public function index(){

              $categories = Category::all();
      return $this->view('categories/index.twig',compact('categories'));
          
      }

      public function create()
      {
              //returns create view
      return $this->view('categories/create.twig');


      }
      public function store(HttpRequest $httpRequest)
      {       

              $fields = $httpRequest->all(); 
              
              
              //ramsey/uuid package
              Category::create($fields);
              


              header("Location:/EsBootCamp-Blog/dashboard/categories");
        

      }

      public function delete($id)
      {
        $category = Category::where('category_id',$id);
        $category_from_joint = DB::table('category_articles')->where('category_id',$id);
        
        $category_from_joint->delete();
        $category->delete();
        
        header("Location:/EsBootCamp-Blog/dashboard/categories");
      }
      public function edit($id)
      {         
               
            $category = Category::where('category_id',$id)->first();     
            return $this->view('categories/update.twig',['category'=>$category]);

      }

      public function update(HttpRequest $httpRequest)
      {
        $fields = $httpRequest->all();
        
        
        $category=  Category::where('category_id',$httpRequest->name('category_id'))->update($fields);
        
        // echo '<pre>' . var_export($user, true) . '</pre>';
        // die();
        
        
        header("Location:/EsBootCamp-Blog/dashboard/categories");
      }



}