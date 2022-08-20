<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Catálogo</h2>
    <div id= "catbox">
    <nav id="menucat">
        <ul>
            <li><a href="catalogo.php?id=SC#contenido">Sillón Capri</a></li>
            <li><a href="catalogo.php?id=MI#contenido">Mesa Ipanema</a></li>
            <li><a href="catalogo.php?id=VV#contenido">Vanco Venecia</a></li>
        </ul>
    </nav>
    </div>
    <div id="imgproducto">
         <?php 
         if (isset($_GET['id'])) {
                     
            switch ($_GET['id']) {
                case 'SC':
                    $imagen =  'sillon1.jpg';
                    $producto = 'Sillón Capri';
                    $precio = 345.00;
                    $caract = 'Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece. ';
                    break;
                case 'MI':
                    $imagen = 'ipanema.jpg';
                    $producto = 'Mesa Ipanema';
                    $precio = 500.00;
                    $caract = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
                    break;
                case 'VV':
                    $imagen = 'venecia.jpg';
                    $producto = 'Banco Venecia';
                    $precio =  450.00 ;  
                    $caract = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
                    break;        

            }

        ?>
        <img src="imagenes/<?php echo $imagen; ?>" >
    </div>
    <div id="producto">
       
        <h2>Producto: <?php echo $producto; ?></h2>
        <p><b>Precio: $ </b> <?php echo $precio; ?></p>
        <p><b>Características: </b> <?php echo $caract; ?></p>

       <?php } else { ?>
           <div id="infoprod">
                <h3>Seleccione el producto deseado para obtener más información.</h3>
                <p></p>
           </div> 
       <?php } ?>
    </div>
    
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>