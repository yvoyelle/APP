<?php include"includes/header.php";?>
<?php
$nombre="clavo";
$codigo="123";
$tipo="puntilla";
$precio="2000";
$cantidad="500";

	//Declarar dos variables $nombre, $contrasena
	if(isset($_GET[ "enviar_hdn"])){
		if($nombre==$_GET["nombre_txt"] && $cantidad==$_GET["cantidad_txt"] 
		 && $tipo==$_GET["tipo_txt"] && $precio==$_GET["precio_txt"]){

		echo 
			"El nombre que ingresaste por GET es ".$_GET["nombre_txt"].
			".<br></br>El nombre que ingresaste por GET es ".$_GET["cantidad_txt"].
			".<br></br>El tipo de producto que ingresaste por GET es ".$_GET[ "tipo_txt"].
		    ".<br></br>la fecha que ingresaste por GET es ".$_GET[ "evaporacion_txt"].
            ".<br></br>El fecha que ingresaste por GET es ".$_GET[ "vencimiento_txt"].
            ".<br></br>El precioque ingresaste por GET es ".$_GET[ "precio_txt"]
            .".";	
		}
		
		
		else{
			echo "Verifica tus datos";
		}
		
	}
	else if(isset($_POST[ "enviar_hdn"])){
		if($nombre==$_POST["nombre_txt"] && $cantidad==$_POST["cantidad_txt"] 
		 && $tipo==$_POST["tipo_txt"] && $precio==$_POST["precio_txt"]){

		echo 
			"El nombre que ingresaste por POST es ".$_POST["nombre_txt"].
			".<br></br>El nombre que ingresaste por POST es ".$_POST["cantidad_txt"].
			".<br></br>El tipo de producto que ingresaste por POST es ".$_POST[ "tipo_txt"].
		    ".<br></br>la fecha que ingresaste por POST es ".$_POST[ "evaporacion_txt"].
            ".<br></br>El fecha que ingresaste por POST es ".$_POST[ "vencimiento_txt"].
            ".<br></br>El precioque ingresaste por POST es ".$_POST[ "precio_txt"]
            .".";	
		}
		else{
			echo "Verifica tus datos";
		}
	}

include 'includes/footer.php';