<?php
    
    require_once('db.class.php');

    session_start();


    $objDB = new db();
    $link = $objDB->conecta_mysql();    
//    $sql = " SELECT * FROM clientes WHERE email_cli = '$email_cli' AND senha_cli = '$senha_cli' ";

//    $resultado_id = mysqli_query($link, $sql);


?>