<?php
    $css = 'Login/StylesLogin.css';
    \Src\Classes\ClassLayout::setHeader('Login','Pagina de Login do site','Kauã',$css); ?>
    <div class="fundo">
        <img src="<?php echo(DIRIMG.'Login/fundo-login.jpg')?>">
    </div>
    <form name="login" id="formLogin" action="" method="post">
        <div class="login">
            <div class="loginFormulario">
                <input type="email" id="email" name="email" placeholder="Email:" required>
                <input type="password" id="senha" name="senha" placeholder="Senha:" required>
                <input type="button" value="Entrar" onclick="login()">
            </div>
            <div class="loginTextos">
                Esqueci minha senha
            </div>
        </div>
    </form>
<?php
    $src ='Login/ScriptLogin.js';
    \Src\Classes\ClassLayout::setFooter($src);?>