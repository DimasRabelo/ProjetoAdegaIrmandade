<?php
session_start();

if (!isset($_SESSION['idUsuario'])) {
    header("location:https://adegairmandade.smpsistema.com.br/index.php");
    exit;
}

$id = $_SESSION['idUsuario'];

require_once('admin/class/cliente.php');

// Obtém o nome e a foto do usuário com base no tipo
$usuario = new ClienteClass($id);
$_SESSION['nomeUsuario'] = $usuario->getNome();
$_SESSION['fotoUsuario'] = $usuario->getFoto();

