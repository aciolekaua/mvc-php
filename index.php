<?php
    header("Content-Type: text/html; charset=utf-8");
    include('Config/config.php');
    include(DIRREQ.'Src/Lib/vendor/autoload.php');

    $dispatch = new Src\Classes\ClassDispatch;
    include($dispatch->getInclusao());
?>