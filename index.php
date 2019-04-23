<!DOCTYPE html>
<html lang="mx" xml:lang="mx">
<?php 
error_reporting(0);
ini_set( 'display_errors', false );
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE );
date_default_timezone_set("Mexico/General");
$phpv=php5	;//vercion de php con que estara trabajando 

echo"	
	<head>
			<title>Transporte de García E Hijos S.A. de C.V.</title>
			<META CHARSET='UTF-8'/>
			<meta http-equiv='Content-type' content='text/html; charset=utf-8' />
	</head>";
?>
	<body style='background:#267ba5;'>
		<?php	
			$empresa=empresa;	
			
			include("libre_v2.php");	if ($libre_v2==''){echo"Error de Carga 'libre_v2'";}
			
			if($estilo_v1==""){echo"<LINK REL='STYLESHEET' HREF='../estilo_v1.css' />";$estilo_v1=cargado;}
            echo'<form action="" method="POST" enctype="multipart/form-data" id="formu1">'; 
			echo "<div id='inicio_carga'>";
				echo"<div style='position: relative;width: 800px;background: yellow;margin-left: auto;margin-right: auto;margin-top: auto;margin-bottom: auto;box-shadow: 0px 0px 0px 1px #0009;padding: 10px;border-top-right-radius: 35px;'>";		
					echo"<a style='color: black;font-size: 36px;background: yellow;text-shadow: 0px 2px 0px white;'>Transporte De Carga García E Hijos S.A. de C.V.</a>";
				echo"</div>";
				echo"<div style='position: relative;width: 800px;height: 435px;background: white;margin-left: auto;margin-right: auto;margin-top: 2px;margin-bottom: auto;box-shadow: 0px 0px 0px 1px #0009;padding: 10px;border-bottom-left-radius: 45px;'>";
					echo"<img style='width: 800px;   height: 380px; box-shadow: 0px 0px 1px black;'src='../img/fondo2.jpg'>";
					echo"<img style='width: 125px;   position: relative;top: 8px;height: 38px;left: 20px;'src='../img/carga.gif'>";
					echo"<a style='position: relative;left: 52px;top: -4px;'>Cargando La Mercancía </a>";
				echo"</div>";
			echo"</div>";
			echo'</form>';
		?>
	</body>
</html>
