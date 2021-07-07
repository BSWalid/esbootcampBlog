<?php 
namespace App\https;

class HttpRequest{

    public function all()
    {   
        
        return $_GET;
    
    }


    public function name(string $field)
    {
        return $_GET[$field];
    }






}