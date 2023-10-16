<?php 
    $nome = isset($_POST['nome']) ? filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS) : null;
    $email = isset($_POST['email']) ? filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) : null;
    $cpf = isset($_POST['cpf']) ? filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS) : null;
    $dataNascimento = isset($_POST['dataNascimento']) ? filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_SPECIAL_CHARS) : null;
    if(isset($_POST['senha'])){$senha = $_POST['senha'];$hashSenha = '';}else {$senha = null;$hashSenha = null;}
    $senhaConf = isset($_POST['senhaConf']) ? $senhaConf = $_POST['senhaConf'] : null;

    $dataCreate = date("Y-m-d H:i:s");

    $token = bin2hex(random_bytes(64));
?>