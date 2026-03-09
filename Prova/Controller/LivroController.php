<?php

session_start();
require_once "./Model/LivroModel.php";

class LivroController{

    public function telaCadastro(){
        require "View/livroCadastrar.php";
    }

    public function cadastrar(){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $ano = $_POST['ano'];
        $editora = $_POST['editora'];

        $livro = new Livro($titulo, $autor, $ano, $editora);
        $livro->salvar();
        header('Location: /PB_php/Prova/livro/telaCadastro');
        exit;
    }

    public function listarLivros(){
        $livros = Livro::listar();
        echo "<pre>";
        print_r($livros);
        echo "</pre>";
        require 'View/livroListar.php';
    }

    public function telaEditar(){
        $livro = Livro::buscar($_GET['id']);
        require 'View/livroEditar.php';
    }

    public function atualizar(){
        $usuario = new Usuario($_POST['titulo'], $_POST['autor'], $_POST['ano'], $_POST['editora']);
        $usuario->atualizar ($_GET['id']);
        header('Location: /PB_php/Prova/livro/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Livro::excluir($_GET['id']);
        header('Location: /PB_php/Prova/livro/listar');
        exit;
    }
}