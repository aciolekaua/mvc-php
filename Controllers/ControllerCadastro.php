<?php
    require_once __DIR__ . '/../Src/Classes/ClassValidate.php';
    use Src\Classes\ClassValidate;
    $validate = new ClassValidate();
    $validate->validateFields($_POST);
    $validate->validateEmail($email);
    $validate->validateData($dataNascimento);
    $validate->validateCpf($cpf);
    var_dump($validate->getError());
?>