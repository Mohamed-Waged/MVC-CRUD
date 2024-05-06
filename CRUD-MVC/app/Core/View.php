<?php
class View{

    public static function load($viewName,$viewData=[]) {
        
        $file = VIEWS.$viewName.".php" ;
        if(file_exists($file)) {
            extract($viewData);
            ob_start();
            require($file);
            ob_end_flush();
        }else{
            die("<h1>This View : $viewName Not Found</h1>");
        }

    }
}