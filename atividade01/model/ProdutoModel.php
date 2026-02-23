<?php

class Produto{
    private $categoria;
    private $disponivel;

    public function __construct($categoria, $disponivel){
        $this->categoria=$categoria;
        $this->disponivel=$disponivel;
    }


    public function salvar(){
        if(!isset($_SESSION['produto'])){
            $_SESSION['produto'] = [];
        }
    
        $_SESSION['produto'][]=[
            'categoria'=>$this->categoria,
            'disponivel'=>$this->disponivel,
            'validade'=>$this->validade,
            'preço'=>$this->preço,
            'quantidade'=>$this->quantidade,
            'nome'=>$this->nome,
        ];
    }

    public static function listar(){
        return $_SESSION['produto'] ?? [];
    }
}