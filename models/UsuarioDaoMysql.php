<?php
    require_once 'models/Usuario.php';  

    class UsuarioDaoMysql implements UsuarioDao {
        private $pdo;

        public function __construct(PDO $driver) {
            $this->pdo = $driver;
        }

        public function adicionar(Usuario $u) {
            
            $sql = $this->pdo->prepare("INSERT INTO formulario (nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES (:nome, :email, :senha, :telefone, :sexo, :nascimento, :cidade, :estado, :endereco)");

            $sql->bindValue(':nome', $u->getNome());
            $sql->bindValue(':email', $u->getEmail());
            $sql->bindValue(':senha', $u->getSenha());
            $sql->bindValue(':telefone', $u->getTelefone());
            $sql->bindValue(':sexo', $u->getSexo());
            $sql->bindValue(':nascimento', $u->getNascimento());
            $sql->bindValue(':cidade', $u->getCidade());
            $sql->bindValue(':estado', $u->getEstado());
            $sql->bindValue(':endereco', $u->getEndereco());
            $sql->execute();

            $u->setId($this->pdo->lastInsertId());
            return $u;
        }

        public function login($email, $senha) {
            $sql = $this->pdo->prepare("SELECT * FROM formulario WHERE email = :email AND senha = :senha");
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', $senha);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }