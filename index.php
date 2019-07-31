<?php
    require_once "config.php";
    /*
    $sql = new Sql();
    $usuarios = $sql->select("SELECT * FROM alunos");

    echo json_encode($usuarios);
    */
    $usuarios = new Usuarios();
    $usuarios->loadById(1);
    echo $usuarios;
?>