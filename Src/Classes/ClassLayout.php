<?php 
    namespace Src\Classes;

    class ClassLayout{

        #Setar as Tags do Header
        public static function setHeader($title,$description,$autor='Kauã',$css):void{
            $html = "<!DOCTYPE html>\n";
            $html.="<html lang='pt-br'>\n";
            $html.="<head>\n";
            $html.="  <meta charset='UTF-8'>\n";
            $html.="  <meta name='viewport' content='width=device-width, initial-scale=1'>\n";
            $html.="  <meta name='author' content='{$autor}'>\n";
            $html.="  <meta name='format-detection' content='telephone=no'>\n";
            $html.="  <meta name='description' content='{$description}'>\n";
            $html.="  <title>{$title}</title>\n";
            $html.="  <link rel='stylesheet' href='".DIRCSS."Styles.css'>\n";
            $html.="  <link rel='stylesheet' href='".DIRCSS.$css."'>\n";
            $html.="</head>\n\n";
            $html.="<body>\n";
            echo $html;
        }

        #Setar as Tags do Footer
        public static function setFooter($src):void{
            $html ="<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js' integrity='sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>\n";
            $html.='<script src='.DIRJS.'config.js></script>'."\n";
            $html.='<script src='.DIRJS.'jquery.mask.js></script>'."\n";
            $html.='<script src='.DIRJS.$src.'></script>'."\n";
            $html.= "</body>\n";
            $html.="</html>\n";
            echo $html;
        }
    }
?>