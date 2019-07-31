<?php
    require_once "config.php";
    /*
    $sql = new Sql();
    $usuarios = $sql->select("SELECT * FROM alunos");

    echo json_encode($usuarios);
    
    $usuarios = new Usuarios();
    $usuarios->loadById(1);
    echo $usuarios;
    echo "<br>";
    $lista =  Usuarios::getList();
    echo json_encode($lista);
    echo "<br>";
    $search = Usuarios::search("Gab");
    echo json_encode($search);
    
    //cadastrando dados
    $cad = new Usuarios();
    $cad->setNome("Elizane Santos");
    $cad->setEndereco("CSB 4");
    $cad->setBairro("Taguatinga Sul");
    $cad->cadastrar();
    echo "<br>";
    */
    $cad = new Usuarios();
    $cad->setNome("Elizane Santos França");
    $cad->setEndereco("CSB 4, lotes 4 a 6");
    $cad->setBairro("Taguatinga Sul - Taguatinga");
    $cad->salvar(3);
    echo "<br>";
    $lista =  Usuarios::getList();
    echo json_encode($lista);
    echo "<br>";
?>