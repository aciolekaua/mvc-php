<?php 
    namespace App\Models;

    class ClassCrud extends ClassConexao{
        private $crud;

        #Responsavel pela preparação e execução da query
        private function prepareExecute($prep,$exec){
            $this->crud = $this->conectaDB()->prepare($prep);
            $this->crud->execute($exec);
        }

        #Seleção de Dados
        public function selectDB($fields,$tabela,$where,$exec){
            $this->prepareExecute("SELECT {$fields} FROM {$tabela} {$where}", $exec);
            return $this->crud;
        }

        #Inserção de Dados
        public function insertDB($tabela, $values, $exec){
            $this->prepareExecute("INSERT INTO {$tabela} VALUES ($values)",$exec);
            return $this->crud;
        }

        #Atualização de Dados
        public function updateDB($tabela,$values,$where,$exec){
            $this->prepareExecute("UPDATE {$tabela} SET {$values} WHERE {$where}",$exec);
            return $this->crud;
        }

        #Deletar Dados
        public function deleteDB($tabela,$values,$exec){
            $this->prepareExecute("DELETE FROM {$tabela} WHERE {$values}",$exec);
            return $this->crud;
        }
    }
?>