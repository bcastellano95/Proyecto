<?php

require_once 'dataBase.php';

if (isset($_POST['guardarNoticia'])) {
    $db = new dataBase();
    $db->conectar();
    $db->insertar(array(null, $_POST['nomNoticia'], $_POST['fechaPulic'], $_POST['linkImg'],
        $_POST['descripcion']), "noticias");

    require './cargaNoticias.php';
}
if (isset($_POST['enviar'])) {
    $db = new dataBase();
    $db->conectar();
    $db->insertar(array($_POST['pname'], $_POST['uname'], $_POST['email'],
        $_POST['pass'], '1'), "administradores");

    require './login.php';
}
if (isset($_POST['enviarU'])) {
    $db = new dataBase();
    $db->conectar();
    $db->insertar(array($_POST['pname'], $_POST['uname'], $_POST['email'],
        $_POST['pass'], '2'), "administradores");

    require './login.php';
}
if (isset($_POST['ingresar'])) {
    $db = new dataBase();
    $db->conectar();

    $result = $db->consultarlog("administradores", $_POST['passLog'], $_POST['userNam']);
    if (mysqli_fetch_array($result) == true) {

        require './cargaNoticias.php';
    } else {
        require './login.php';
    }
}
if (isset($_POST['ingresarU'])) {
    $db = new dataBase();
    $db->conectar();

    $result = $db->consultarlog("administradores", $_POST['passLog'], $_POST['userNam']);
    if (mysqli_fetch_array($result) == true) {

        require './index.php';
    } else {
        require './login.php';
    }
}
if (isset($_POST['guardarguia'])) {
    $db = new dataBase();
    $db->conectar();
    $db->insertar(array(null, $_POST['nom_clases'], $_POST['nomEspec'], $_POST['introduccion'], $_POST['resumendehabilidades'], $_POST['talentos'], $_POST['artefactoyReliquias'],
        $_POST['estadisticasPincipales'], $_POST['gemasEncantamientos'], $_POST['legendariosBIS']), "guia_clases");

    require './cargaNoticias.php';
}
if (isset($_POST['guardarguiaBoss'])) {
    $db = new dataBase();
    $db->conectar();
    $db->insertar(array($_POST['nomRaid'], $_POST['nomBoss'], $_POST['intro'], $_POST['Habilidades'],
        $_POST['Heroico'], $_POST['Mitico']), "guia_bosses");

    require './cargaNoticias.php';
}
  
