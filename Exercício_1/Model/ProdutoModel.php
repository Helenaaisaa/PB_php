<?php

class Produtos{
    private $Produto;
    private $Valor;
    private $Quantidade;
    private $Validade;

    public function __construct($Produto, $Valor, $Quantidade, $Validade){
        $this->Produto = $Produto;
        $this->Valor = $Valor;
        $this->Quantidade = $Quantidade;
        $this->Validade = $Validade;
    }

    public function salvar(){
        if(!isset($_SESSION['produtos'])){
            $_SESSION['produtos'] = [];
        }

        $_SESSION['produtos'][] = [
            'Produto' => $this->Produto,
            'Valor' => $this->Valor,
            'Quantidade' => $this->Quantidade,
            'Validade' => $this->Validade
        ];
    }

    public static function listar(){
        return $_SESSION['produtos'] ?? [];
    }

    public static function buscar ($id){
        return $_SESSION['produtos'][$id] ?? null;
    }

    public function atualizar ($id){
        if(isset($_SESSION['produtos'][$id])){
            $_SESSION['produtos'][$id] = [
                'Produto' => $this->Produto,
                'Valor' => $this->Valor,
                'Quantidade' => $this->Quantidade,
                'Validade' => $this->Validade
            ];
        }
    }
        
    public static function excluir ($id) {
        if (isset($_SESSION['produtos'][$id])){
            unset($_SESSION['produtos'][$id]);
        }
    }
}