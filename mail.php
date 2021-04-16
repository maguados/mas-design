<!DOCTYPE html>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Procesador de email</title>
</head>

<body>
<?php
if (isset($_POST["fullname"], $_POST["email"], $_POST["subject"]) and $_POST["fullname"]!="" and $_POST["email"]!="" and $_POST["subject"]!=""){
    
    
	$destino = "mas.mas.mas.design@gmail.com";
	$titulo = "Mensaje desde mi sitio web";	
	$nombre =$_POST["fullname"];
	$email=$_POST["email"];
	
	$mensaje =' 
	<h2>Datos del visitante</h2>
	<ul>
		<li>Nombre: '.$nombre.'</li>
		<li>Email: '.$email.'</li>
	</ul>	
	<h2>Mensaje:</h2>
	<p>'.$_POST["subject"].'</p>';
	
	//no modificar
	/*$cabeceras = 
	"MIME-Version:1.0\r\nContent-type: text/html;
	charset=UTF-8\r\n From: $nombre <$email>\r\n";*/
	
	$headers = "MIME-Version:1.0"."\r\n"."Content-type: text/html;
	charset=UTF-8"."\r\n". "From: $nombre <$email>"."\r\n";	
		
	mail($destino, $titulo, $mensaje, $headers);
?>	
	<script>
		alert("Gracias por enviar su mensaje. Estamos en contacto.");
    	document.location.href="contact.html";	
    </script>

<?php  
    }else{

        echo 'No se envió ningún mensaje desde el formulario';

    } 	
?>  

</body>
</html>