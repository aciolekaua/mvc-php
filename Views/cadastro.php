<?php 
    $css = DIRCSS.'Cadastro/Styles.css';
    \Src\Classes\ClassLayout::setHeader('Cadastro','Pagina de Cadastro do site','',$css);?>
    <form name="cadastro" id="formCadastro" action="" method="post">
        <div class="cadastro">
            <input type="text" id="nome" name="nome" placeholder="Nome:" required>
            <input type="email" id="email" name="email" placeholder="Email:" required>
            <input type="text" id="cpf" name="cpf" placeholder="CPF:">
            <input type="text" id="dataNascimento" name="dataNascimento" placeholder="Data de Nascimento:" required>
            <input type="password" id="senha" name="senha" placeholder="Senha:" required>
            <input type="password" id="senhaConf" name="senhaConf" placeholder="Confirmação da Senha:" required>
            <input type="button" value="Cadastrar" onclick="cadastrar()">
        </div>
    </form>
<?php 
    $src = 'Cadastro/Script.js';
    \Src\Classes\ClassLayout::setFooter($src);
?>