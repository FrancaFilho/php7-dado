<?php
    class Usuarios{

        private $nome;
        private $endereco;
        private $bairro;

        public function getNome(){
            return $this->nome;
        }
        public function setNome($value){
            $this->nome = $value;
        }
        public function getEndereco(){
            return $this->endereco;
        }
        public function setEndereco($value){
            $this->endereco = $value;
        }
        public function getBairro(){
            return $this->bairro;
        }
        public function setBairro($value){
            $this->bairro = $value;
        }

        public function loadById($id){
            $sql = new Sql();
            $res = $sql->select("SELECT * FROM alunos WHERE id=:ID",array(
                ":ID" => $id
            ));
            //if($re[0]) ou
            if(count($res) > 0){
                $row = $res[0];
                $this->setNome($row['nome']);
                $this->setEndereco($row['endereco']);
                $this->setBairro($row['bairro']);
            }
        }
        public function __toString(){
            return json_encode(array(
                "nome" => $this->getNome(),
                "endereco" => $this->getEndereco(),
                "bairro" => $this->getBairro(),
            ));
        }
    }
?>














