<?php
    $css = '';
    \Src\Classes\ClassLayout::setHeader('Homepage','Pagina de Homepage do site','Kauã',$css); ?>
<h1>Homepage</h1>
<a href="<?php echo DIRPAGE.'cadastro';?>">Cadastro</a><br>
<a href="<?php echo DIRPAGE.'login'; ?>">Login</a>
<?php 
    $src = '';
    \Src\Classes\ClassLayout::setFooter($src);?>