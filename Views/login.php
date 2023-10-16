<?php
    $css = 'Login/StylesLogin.css';
    \Src\Classes\ClassLayout::setHeader('Login','Pagina de Login do site','Kauã',$css); ?>
    <div class="fundo"></div>
    
    <!-- <div class="loginLogoMarca float w100 center"><img src="<?php //echo(DIRIMG.'Login/logo.png');?>"></div> -->
    <form name="login" id="formLogin" action="<?php echo(DIRPAGE."Controllers/ControllerLogin");?>" method="post">
        <div class="login">
            <div class="loginFormulario float w100">
                <input class="float w100 h40" type="email" id="email" name="email" placeholder="Email:" required>
                <input class="float w100 h40" type="password" id="senha" name="senha" placeholder="Senha:" required>
                <input class="float h40 center" type="submit" value="Entrar">
                <div class="loginTextos float center"><a href="<?php echo(DIRPAGE.'esqueci-minha-senha');?>">Esqueci minha senha</a></div>
            </div>
        </div>
    </form>
<?php
    $src ='Login/ScriptLogin.js';
    \Src\Classes\ClassLayout::setFooter($src);?>