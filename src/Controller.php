<?php 

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller 
{
    public function view(string $path,$data =[]){

        $loader = new FilesystemLoader('../views');
        $twig = new Environment($loader, [
            'cache' => 'false',
        ]);
        
        echo $twig->render($path,$data);

       

    }
}