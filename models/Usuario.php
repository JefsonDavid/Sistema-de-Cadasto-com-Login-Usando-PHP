<?php
    class Usuario {
        private $id;
        private $nome;
        private $email;
        private $senha;
        private $telefone;
        private $sexo;
        private $nascimento;
        private $cidade;
        private $estado;
        private $endereco;


        public function getId() {
            return $this->id;
        }

        public function setId($i) {
            $this->id = trim($i);
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($no) {
            $this->nome = ucwords(trim($no));
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($em) {
            $this->email = strtolower(trim($em));
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setSenha($se) {
            $this->senha = $se;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function setTelefone($te) {
            $this->telefone = $te;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo($se) {
            $this->sexo = $se;
        }

        public function getNascimento() {
            return $this->nascimento;
        }

        public function setNascimento($na) {
            $this->nascimento = $na;
        }

        public function getCidade() {
            return $this->cidade;
        }

        public function setCidade($ci) {
            $this->cidade = $ci;
        }

        public function getEstado() {
            return $this->estado;
        }

        public function setEstado($es) {
            $this->estado = $es;
        }

        public function getEndereco() {
            return $this->endereco;
        }

        public function setEndereco($en) {
            $this->endereco = $en;
        } 
    }

    interface UsuarioDao {
        public function adicionar(Usuario $u);
    }