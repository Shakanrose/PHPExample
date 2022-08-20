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
    <section id="contenido3">
    <h2>Clientes</h2>
    <div id="tclient">
     <table class="tabla">   
            <tr id="top">
               <th>ID Pedido</th>
               <th>Producto</th> 
               <th>Cantidad</th> 
               <th>Precio</th>          
            </tr>
       
    <?php 
    include('connect.php');
    $consulta = mysqli_query($connect, "SELECT * FROM pedidos_cliente");
    if (isset($consulta)) {
        while($pedidos = mysqli_fetch_assoc($consulta)){ ?>
         
            <tr>
                <td> <?php echo $pedidos['id_pedido']; ?></td>
                <td> <?php echo $pedidos['producto']; ?></td> 
                <td> <?php echo $pedidos['cantidad']; ?></td> 
                <td> $<?php echo $pedidos['precio']; ?></td>  
            </tr>
    <?php    
    }
    };
    ?>        
           
      </table>         
    </div>
    
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>