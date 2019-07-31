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
        public static function getList(){
            $sql = new Sql();
            return $sql->select("SELECT * FROM alunos ORDER BY id DESC");
        }
        public static function search($nome){
            $sql = new Sql();
            return $sql->select("SELECT * FROM alunos WHERE nome LIKE :NOME", arraY(
                ":NOME" => "%".$nome."%"
            ));
        }
        public function cadastrar(){
            $sql = new Sql();
            $sql->query("INSERT INTO alunos (nome, endereco, bairro)
            VALUES (:NOME, :ENDERECO, :BAIRRO)",array(
                ":NOME" => $this->getNome(),
                ":ENDERECO" => $this->getEndereco(),
                ":BAIRRO" => $this->getBairro(),
            ));
        }
        public function salvar($id){
            $sql = new Sql();
            $sql->query("UPDATE alunos SET nome=:NOME, endereco=:ENDERECO, bairro=:BAIRRO
             WHERE id=:ID",array(
                ":NOME" => $this->getNome(),
                ":ENDERECO" => $this->getEndereco(),
                ":BAIRRO" => $this->getBairro(),
                ":ID" => $id,
            ));
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














