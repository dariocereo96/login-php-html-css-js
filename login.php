<?php
	
	if (empty($_POST['email'])) 
	{
    	echo json_encode([
    		'status'=>'fail',
    		'message'=>'Ingrese su email'
    	]);
	}
	elseif (empty($_POST['password'])) {
		echo json_encode([
			'status'=>'fail',
    		'message'=>'Ingrese su contaseña'
    	]);
	}
	elseif($_POST["email"]=="prueba1@gmail.com" && $_POST["password"]=="12345")
	{
		echo json_encode([
    		'status'=>'success',
    		'message'=>"Bienvenido Pablo"
    	]);
	}
	else
	{
		echo json_encode([
    		'status'=>'fail',
    		'message'=>"Error en las credenciales"
    	]);
	}


