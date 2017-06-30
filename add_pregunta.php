<?php 
	require('connect.php');

	function getArraySQL($sql){
	    //Creamos la conexión con la función anterior
	    $conexion = connectDB();
	 
	    //generamos la consulta
	 
	        mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
	 
	    if(!$result = mysqli_query($conexion, $sql)) die('Error Add'); //si la conexión cancelar programa
	 
	    $rawdata = array(); //creamos un array
	 
	    //guardamos en un array multidimensional todos los datos de la consulta
	    $i=0;
	 
	    /*while($row = mysqli_fetch_array($result))
	    {
	        $rawdata[$i] = $row;
	        $i++;
	    }*/
	 
	    disconnectDB($conexion); //desconectamos la base de datos
	 
	    return $rawdata; //devolvemos el array
	}


	$id = $_REQUEST['id'];
	$texto = $_REQUEST['texto'];
	$valor = $_REQUEST['valor'];
	$test_id = $_REQUEST['test_id'];
	$fecha = $_REQUEST['fecha'];
	$client_id = $_REQUEST['client_id'];
	$seller_id = $_REQUEST['seller_id'];

	// $id = 3;
	// $texto = "He puto";
	// $valor = 5;
	// $test_id = 2;
	// $fecha = "2017-06-29 01:50:00";
	// $client_id = 3;
	// $seller_id = 1;
	$sql_inser = "INSERT INTO `preguntas` (`pregunta_id`, `_id`, `texto`, `valor`, `test_id`, `fecha`, `client_id`, `seller_id`) VALUES (NULL, '".$id."', '".$texto."', '".$valor."', '".$test_id."', '".$fecha."', '".$client_id."', '".$seller_id."');";

	$my_arr = getArraySQL($sql_inser);
	echo true;
?>