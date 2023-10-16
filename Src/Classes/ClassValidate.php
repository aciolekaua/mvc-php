<?php 
    namespace Src\Classes;

    class ClassValidate {
        private $erros = [];
        private $mensgem = [];

        public function getError(){
            return $this->erros;
        }
        
        public function setError($erros){
            array_push($this->erros, $erros);
        }
        
        public function setMessage($mensagem){
            array_push($this->mensgem, $mensagem);
        }

        public function getMessage(){
            return $this->mensgem;
        }
        
        #Validar se todos os Campos foram preenchidos
        public function validateFields($par){
            $i=0;
            foreach($par as $key => $value){
                if(empty($value)){
                    $i++;
                }
            }
            if($i==0){
                return true;
            }else{
                $this->setError("Preencha todos os dados");
                return false;
            }
        }

        #Validação se o dado é um email
        public function validateEmail($par){
            if(filter_var($par,FILTER_SANITIZE_EMAIL)){
                return true;
            }else{
                $this->setError("Email invalido!");
                return false;
            }
        }

        #Validação se o dado é uma Data
        public function validateData($par){
            $data = \DateTime::createFromFormat("d/m/y",$par);
            if(($data) && ($data->format("d/m/y")=== $par)){
                return true;
            }else{
                $this->setError("Data no formato invalido!");
                return false;
            }
        }

        #Validação se o dado é um CPF real
        public function validateCpf($par){
                $cpf = preg_replace( '/[^0-9]/is','',$par);
     
                // Verifica se foi informado todos os digitos corretamente
                if(strlen($cpf) != 11){
                    $this->setError("Cpf invalido");
                    return false;
                }

                // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
                if(preg_match('/(\d)\1{10}/', $cpf)){
                    $this->setError("Cpf Invalido");
                    return false;
                }

                // Faz o calculo para validar o CPF
                for($t = 9; $t < 11; $t++) {
                    for($d = 0, $c = 0; $c < $t; $c++){
                        $d += $cpf[$c] * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if($cpf[$c] != $d){
                        $this->setError("Cpf Invalido");
                        return false;
                    }
                }
                return true;
        }

    }
?>