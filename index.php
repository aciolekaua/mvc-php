<?php
    header("Content-Type: text/html; charset=utf-8");
    include('Config/config.php');
    include(DIRREQ.'Src/Lib/vendor/autoload.php');

    // $dispatch = new Src\Classes\ClassDispatch;
    // include($dispatch->getInclusao());

    use App\Models\ClassCrud;
    $data = date("Y-m-d H:i:s");
    $crud = new ClassCrud();
    $crud->insertDB("users",
    "?,?,?,?,?,?,?,?,?",
    array(
        0,
        'Kauã',
        'aciolekaua@gmail.com',
        '123',
        '11/05/2004',
        '111.222.333-44',
        $data,
        'user',
        'ativo'
    )
);

?>