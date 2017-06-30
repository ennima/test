<?php

// $enlace =  mysql_connect($host_db, $user_db, $pass_db);
// if (!$enlace) {
//     die('No pudo conectarse: ' . mysql_error());
// }
// echo 'Conectado satisfactoriamente';
// mysql_close($enlace);
mysql_set_charset('utf8');
//$selected = mysql_select_db("ticker",$enlace) or die("Could not select tickers");


function connectDB(){
 
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db = "quest_test_db";
     
   $conexion = mysqli_connect($host_db, $user_db, $pass_db, $db);
    if($conexion){
        //echo 'La conexión de la base de datos se ha hecho satisfactoriamente';
    }else{
        echo 'Ha sucedido un error inesperado en la conexión de la base de datos';
    }   
    return $conexion;
}



function disconnectDB($conexion){
 
    $close = mysqli_close($conexion);
 
    if($close){
        //echo 'La desconexión de la base de datos se ha hecho satisfactoriamente';
    }else{
        echo 'Ha sucedido un error inesperado en la desconexión de la base de datos';
    }   
 
    return $close;
}


$conexion = connectDB();
disconnectDB($conexion);

?>