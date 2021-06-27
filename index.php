<!DOCTYPE html>
<html lang="es" dir="ltr">    <!--ltr iza derecha  rtl dera a izq  auto usuario decide -->
	<head>
		<meta charset="utf-8">
		<title>APLICACION</title>
		<link rel="icon" type="imagen/jpg" href="imagenes/dragon.jpg"/>    <!--favicon-->
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet"  href="estilos/index.css">
        <style>
				          *{
					padding: 0;
					margin: 0;
					text-decoration: none;
					list-style: none;
					box-sizing: border-box;
				body
				}

				{

					font-family: montserrat;

				}

				.titulo
				{
					text-align: center;

				}

				.subtitulo
				{
					text-align: center;
					font-size: 30px;
				}

				.contenedor
				{
				   position:absolute;
				   margin: 0 auto;
				   left: 0;
				   right: 0;
				   width:200px;
				     
				}
        </style>


	</head>
	
	<body>
			<h1 class="titulo">Calculo de raices de una ecuacion cuadratica con la formula general</h1>
			<hr>
			<br>
			<br>
            <p class="subtitulo">aX<sup>2</sup>+bx+c=0</p>
            <br>
			<div class="contenedor">
				<p>Ingresar los coeficientes a,b,c</p>
			    <hr>
				<br>
				<form action="" method="post">
					 <p>a: <input type="number" name="a" ></p>
  					 <p>b: <input type="number" name="b" ></p>
  					 <p>c: <input type="number" name="c" ></p>
  					 <br>
  					 <input type="submit" value="Calcular" name="calcula" >
                     <input type="reset" value="Borrar" >
				</form>
			</div>
	</body>


    <?php
	    if (isset($_POST['calcula']))     //si se presiono el boton  enviar                           
	      {   
	           
	          $a = $_POST["a"];
	          $b = $_POST["b"];
	          $c = $_POST["c"];
			  $aux1 = pow($b,2)- (4 * $a * $c);
              $r1 = -$b + sqrt($aux1);
              $r2 = -$b - sqrt($aux1);
              $x1 = $r1/(2 * $a);
			  $x2 = $r2/(2 * $a);
              
              echo "x1=" . $x1 . "<br>";
              echo "x2=" . $x2;
              
	      }
    ?>


</html>	