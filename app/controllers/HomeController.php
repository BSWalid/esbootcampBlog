<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\Category;
use Controller;
use Illuminate\Database\Capsule\Manager as DB;


class HomeController extends Controller{


        public function index(){
              

               $articlesandcategories =DB::table('article_category')->get();
               $categories=DB::table('article_category')->groupBy('category_id')->pluck('category_id');
               $collections=[];
               foreach ($categories as $category) {
                       $articles=[];
                       $maxArticlCount= 0;
                       foreach($articlesandcategories as $articlewithCategory ){
                                if($articlewithCategory->category_id == $category && $maxArticlCount<3 ){
                                        
                                   $articlethis=
                                        DB::table('articles')->where('article_id',$articlewithCategory->article_id)->first();
                                   array_push($articles, $articlethis);
                                   $maxArticlCount+=1;
                                       
                                }
                       }
                       array_push($collections,
                       ['category_id'=>$category,
                       'category'=>DB::table('categories')->where('category_id',$category)->value('name'),
                       'articles'=>$articles]);
               }

               /* echo '<pre>' . var_export($collection, true) . '</pre>';
               die(); */
/* 
                foreach ($collections as $collection) {
                        echo '<pre>' . var_export($collection['articles'], true) . '</pre>';

                        foreach ($collection['articles'] as $article) {
                       

                                
                        }
                        die();
                     
                }  */

            


                return $this->view('HomePage/index.twig',compact('collections'));
            
        }


        
        public function categoryFullPage($id){

            
        }

        public function singleArticleShow($id){

            echo"this is a parameter sent from routing  ".$id;
        }
}