<?php 

?>
<html>
<head>
	<title>Prueba </title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/header.css">

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="js/tabla.js">	</script>
</head>
<body>
    <div class="error">
	    <span>Datos de ingreso no validos</span>
	</div>
	<header>
		<div class="icnam">	
		    <label class="namep">
   			    <h2>Prueba</h2>			
	        </label>
	    </div>		

        <div class="main">    
        	<form action="" id="formain">
        		<input type="text" name="usulog" placeholder="Ususario" required>
                <input type="password" name="passlog" placeholder="Contraseña" required>
                <input type="submit" class="botonlog" value="Iniciar secion">
        	</form>
        </div>
    </header> 
    <main>   	
        <div class="tit">
        	<label>Grafica</label>
        </div>
        <div id="curve_chart" class="curve_chart"></div>
        <div class="btns">
            <form method="POST" action="Excel/leer.php"><input type="submit" name="" value="Leer Excel" ></form>
        	<form method="POST" action="Exelcrear/">
                <input type="submit" name="" value="Crear Exel" >
            </form>
        	<form method="POST" action="genpdf/"><input type="submit" name="" value="Generar pdf"></form>
        	
        </div>
    
    </main>    
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/main.js"></script>    
</body>
</html>