<?php 
    #Caminhos Absulutos
    $pastaInterna = "App/";
    define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

    //define('DIRPAGE',"https://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

    (substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?$barra="":$barra="/";
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

    #Atalhos
    define('DIRIMG',DIRPAGE."Public{$barra}Img/");
    define('DIRCSS',DIRPAGE."Public{$barra}Css/");
    define('DIRJS',DIRPAGE."Public{$barra}Js/");

    #Acesso ao DB
    define('HOST',"localhost");
    define('DB',"sistema");
    define('USER','root');
    define('PASS',"");

?>