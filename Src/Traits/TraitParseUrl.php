<?php 
    namespace Src\Traits;

    trait TraitParseUrl {
        #Cria um Array com a Url digitada pelo usuario 
        public static function parseUrl($par=null):array{
            $url = explode("/",rtrim($_GET['url'],FILTER_SANITIZE_URL));
            
            #If ternario
            return($par==null)?$url:$url[$par];
            
            #If normal
            //if($par==null){return $url;}else{return $url[$par];}
        }
    }
?>