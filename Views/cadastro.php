<?php 
    $css = 'Cadastro/StylesCadastro.css';
    \Src\Classes\ClassLayout::setHeader('Cadastro','Pagina de Cadastro do site','',$css);?>

    <div class="topFaixa float w100 center">
        Cadastro de Clientes
    </div>
    <form name="cadastro" id="formCadastro" action="<?php echo DIRPAGE.'Controllers/ControllerCadastro';?>" method="post">
        <div class="cadastro float center">
            <input class="float w100 h40" type="text" id="nome" name="nome" placeholder="Nome:" >
            <input class="float w100 h40" type="email" id="email" name="email" placeholder="Email:" required>
            <input class="float w100 h40" type="text" id="cpf" name="cpf" placeholder="CPF:" required>
            <input class="float w100 h40" type="text" id="dataNascimento" name="dataNascimento" placeholder="Data de Nascimento:" required>
            <input class="float w100 h40" type="password" id="senha" name="senha" placeholder="Senha:" required>
            <input class="float w100 h40" type="password" id="senhaConf" name="senhaConf" placeholder="Confirmação da Senha:" required>
            <input class="inlineBlock h40" type="submit" value="Cadastrar">
        </div>
    </form>
<?php 
    $src = 'Cadastro/Script.js';
    \Src\Classes\ClassLayout::setFooter($src);
?>