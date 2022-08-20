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
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="#">Noticias</a></li><li><a href="#">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido2">
    <h2>Contáctenos</h2>
    <div id="contact">
        <form method="POST" action="enviar_consulta.php">
          <input type="text" name="nombre" placeholder="Nombre" maxlength="30" required>
          <input type="text" name="apellido" placeholder="Apellido" maxlength="50" required>  
          <input type="number" name="edad" placeholder="Edad" maxlength="3" min="16" max="120"required>
          <input type="email" name="correo" placeholder="Correo Electrónico" maxlength="100"required> 
          <input type="text" name="motivo" placeholder="Motivo de la consulta" maxlength="100"required> 
          <textarea  type="text" name="mensaje" placeholder="Mensaje" maxlength="450" required></textarea>
          <input type="submit" value="Consultar" id="submit">
        </form>
        <?php 
          if(isset($_GET['sent'])){
            echo "<p>¡Consulta registrada exitosamente!</p>";
          }
        ?>
    </div>
   
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>