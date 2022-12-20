<?php

class Pessoa
{
    public $id_pessoa;
    public $nome;
    public $email;
    public $data_registro;

    public function __construct($id_pessoa = false)
    {
        if ($id_pessoa) {
            $this->id_pessoa = $id_pessoa;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $sql = "SELECT nome, email, data_registro FROM 
        pessoa WHERE id_pessoa = :id_pessoa";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id_pessoa", $this->id_pessoa);
        $stmt->execute();
        $lista = $stmt->fetch();
        $this->nome = $lista['nome'];
        $this->email = $lista['email'];
        $this->data_registro = $lista['data_registro'];
    }

    public function inserir()
    {
        $sql = "INSERT INTO pessoa (nome, email)
        VALUES (:nome, :email)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":email", $this->email);
        $stmt->execute();
    }

    public static function listar()
    {
        $sql = "SELECT * FROM pessoa";
        $conexao = Conexao::conectar();
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function atualizar()
    {
        $sql = "UPDATE pessoa SET nome = :nome, email = :email 
        WHERE id_pessoa = :id_pessoa";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":email", $this->email);
        $stmt->bindValue(":id_pessoa", $this->id_pessoa);
        $stmt->execute();
    }

    public function deletar()
    {
        $sql = "DELETE FROM pessoa WHERE id_pessoa = :id_pessoa";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id_pessoa", $this->id_pessoa);
        $stmt->execute();
    }

    public static function listarPorNome($palavra)
    {
        $palavra = '%' . $palavra . '%';
        $sql = "SELECT * FROM pessoa WHERE nome LIKE :palavra";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":palavra", $palavra);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }
}


