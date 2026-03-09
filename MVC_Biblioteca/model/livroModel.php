<?php

require_once "./database/Database.php";


class Livro{
    private $id;
    private $titúlo;
    private $autor;
    private $ano_publicação;
    private $editora;


    public function __construct($id, $titúlo, $autor, $ano_publicação, $editora){
        $this->id=$id;
        $this->titúlo=$titúlo;
        $this->autor=$auto;
        $this->ano_publicação=$ano_publicação;
        $this->editora=$editora;
r;
    }


    public function salvar(){
        $pdo = Database::conectar();
        $sql = "INSERT INTO livro (id, titúlo, autor, ano_publicação, editora) VALUES (:id, :titúlo, autor, ano_publicação, editora)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $this->id, 'titúlo' => $this->titúlo, 'autor' => $this->autor, 'ano_publicação' => $this->ano_publicação, 'editora' => $this->editora]);
    }

    public static function listar(){
        $pdo = Database::conectar();
        $stmt = $pdo->query("SELECT * FROM livro");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("SELECT * FROM livro WHERE id = :id");
        $stmt->execute(['id'=> $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("UPDATE livro SET id = :id, titúlo = :titúlo, autor = :autor, ano_publicação = :ano_publicação, editora = :editora, WHERE id = :id");
        $stmt->execute(['id' => $id, 'titúlo' => $this->titúlo, 'autor' => $this->autor, 'ano_publicação' => $this->ano_publicação, 'editora' => $this->editora]);
        }

    public function excluir($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("DELETE FROM livro WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
