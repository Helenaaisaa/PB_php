<?php

session_start();
require_once "./Model/ProdutoModel.php";

class ProdutoController{

    public function telaCadastro(){
        require "View/produtoCadastrar.php";
    }

    public function cadastrar(){
        $Produto = $_POST['Produto'];
        $Valor = $_POST['Valor'];
        $Quantidade = $_POST['Quantidade'];
        $Validade = $_POST['Validade'];

        $Produtos = new Produtos($Produto, $Valor, $Quantidade, $Validade);
        $Produtos->salvar();
        header('Location: /PB_php/Exercício_1/produto/telaCadastro');
        exit;
    }

    public function listarProdutos(){
        $Produto = Produtos::listar();
        echo "<pre>";
        print_r($Produto);
        echo "</pre>";
        require 'View/produtoListar.php';
    }

    public function telaEditar(){
        $Produto = Produtos::buscar($_GET['id']);
        require 'View/produtoEditar.php';
    }

    public function atualizar(){
        $usuario = new Produtos($_POST['nome'], $_POST['email']);
        $usuario->atualizar ($_GET['id']);
        header('Location: /PB_php/Exercício_1/produto/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Produtos::excluir($_GET['id']);
        header('Location: /PB_php/Exercício_1/produto/listar');
        exit;
    }
}