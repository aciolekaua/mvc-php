<?php 
    namespace Src\Classes;
    use Src\Traits\TraitParseUrl;

    class ClassDispatch {
        private $init;
        private $url;
        private $dir=null;
        private $cont;
        private $file;
        private $page;

        use TraitParseUrl;

        public function __construct()
        {
            $this->url = TraitParseUrl::parseUrl();
            $this->cont = count($this->url);

            $this->verificarParametros();
        }

        #Verificar se existe parametros digitados na Url
        private function verificarParametros():void{
            if($this->cont == 1 && empty($this->url[0])){
                $this->page = DIRREQ."Views/index.php";
            }else {
                $this->verificarDir();
            }
        }

        #Verificar se o indice digitado é um diretorio
        private function verificarDir():void{
            $this->init = $this->url[0].'/';

            for($i=0; $i > $this->cont; $i++) { 
               if(is_dir($this->init)){
                    if($i==0){
                        $this->dir.=$this->init;
                    }elseif(is_dir($this->dir.$this->url[$i])){
                        $this->dir.=$this->url[$i].'/';
                    }else {
                        $this->file = $this->url[$i];
                        break;
                    }
               }else {
                    if($i==0){
                        $this->dir.="Views/";
                    }

                    if(is_dir($this->dir.$this->url[$i])){
                        $this->dir.=$this->url[$i].'/';
                    }else {
                        $this->file = $this->url[$i];
                        break;
                    }
               }
            }

            $this->dir = str_replace("//","/",$this->dir);
            $this->verificarFile();
        }

        #Verificar se Existe o Arquivo Requisitado pelo o Usuario
        private function verificarFile(){

        }
    }
?>