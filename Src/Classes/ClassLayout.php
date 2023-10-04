<?php 
    namespace Src\Classes;

    class ClassLayout{

        #Setar as Tags do Header
        public static function setHeader($title,$description,$autor='Kauã'):void{
            $html = "<!DOCTYPE html>\n";
            $html.="<html lang='pt-br'>\n";
            $html.="<head>\n";
            $html.="  <meta charset='UTF-8'>\n";
            $html.="  <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
            $html.="  <meta name='author' content='{$autor}'>\n";
            $html.="  <meta name='format-detection' content='telephone=no'>\n";
            $html.="  <meta name='description' content='{$description}'>\n";
            $html.="  <title>{$title}</title>\n";
            $html.="</head>\n\n";
            $html.="<body>\n";
            echo $html;
        }

        #Setar as Tags do Footer
        public static function setFooter():void{
            $html = "</body>\n";
            $html.="</html>\n";
            echo $html;
        }
    }
?>