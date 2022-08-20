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
    <section id="contenido1">
    <h2>Noticias</h2>
    
        <div class="note">
    <?php 
        $noticias = array(
            array('Juego'=>'Call of Duty: Vanguard', 'Lanzamiento'=>'05/11/2021', 'Plataforma'=>'PS4/PS5, Xbox One/Series X|S, PC','Imagen'=>'cod.jpg', 'Descripcion' =>'La galardonada saga de Call of Duty® vuelve con Call of Duty®: Vanguard, donde los jugadores experimentarán influyentes batallas de la Segunda Guerra Mundial mientras luchan por la victoria en los frentes oriental y occidental de Europa, el Pacífico y el Norte de África.</br></br>Crea y consolida tu legado mientras la experiencia multijugador característica de Call of Duty lanza un asalto sin cuartel en todos los frentes. Presencia el auge de las Fuerzas Especiales y llega a nuevos lugares con armamentos auténticos de la Segunda Guerra Mundial.</br></br>Los jugadores también podrán demostrar su coraje mientras intentan sobrevivir al implacable ataque de los no muertos en una nueva experiencia de Zombis, desarrollada por Treyarch Studios.
                '),
            array('Juego'=>'The last of us 2', 'Lanzamiento'=>'19/06/2020', 'Plataforma'=>'PS4', 'Imagen'=>'example.jpg', 'Descripcion'=>'Cinco años después de su peligroso viaje a través de unos Estados Unidos pospandemia, Ellie y Joel logran establecerse en Jackson, Wyoming. Vivir entre una próspera comunidad de sobrevivientes les ha concedido paz y estabilidad, a pesar de la amenaza constante de los infectados y de otros sobrevivientes más desesperados. </br></br>
                Cuando un evento violento interrumpe esa paz, Ellie se embarca en un viaje incesante para obtener justicia y llegar a un cierre. A medida que caza a los responsables uno por uno, deberá enfrentarse a las devastadoras repercusiones físicas y emocionales de sus acciones.'),
            array('Juego' => "Marvel's Guardians of the Galaxy", 'Lanzamiento' => '25/10/2021', 'Plataforma'=>'PS4/PS5, Xbox One/Series X|S, PC, Nintendo Switch', 'Imagen' => 'guardians.jpg', 'Descripcion' => 'Enciende las botas jet de Star-Lord para un viaje salvaje a través del cosmos en este juego de acción y aventura en tercera persona, una nueva versión de Guardianes de la Galaxia de Marvel. </br></br>Con los imprevisibles Guardianes a su lado, ábrete paso de una situación explosiva a otra, con personajes originales e icónicos de Marvel atrapados en una lucha por el destino del universo. </br></br>
                Ya lo tienes. Probablemente.'),
            array('Juego' => 'Age of Empires IV', 'Lanzamiento' => '28/10/2021', 'Plataforma'=>'PC', 'Imagen' => 'age.jpg', 'Descripcion' => 'Age of Empires 4 es la cuarta parte de la veterana saga de estrategia en tiempo real, Age of Empires. Bajo la dirección de Microsoft y con el desarrollo a cargo de Relic Entertainment y el nuevo estudio World’s Edge, se trata de una secuela que pretende recoger conceptos clásicos de los títulos anteriores y presentar nuevas ideas bajo un espectacular apartado gráfico en 3D que nos llevará a la Edad Media.')
        );

        for($i=0; $i<count($noticias); $i++) {
       
     ?>
          <div class="noteimg">
              <img src="imagenes/<?php echo $noticias[$i]['Imagen'] ?>">
          </div> 
          <div class="notebody">
              <h2><em><?php echo $noticias[$i]['Juego'] ?></em></h2>
              <h4>Fecha de Lanzamiento: <?php echo $noticias[$i]['Lanzamiento'] ?></h4>
              <h4>Fecha de Lanzamiento: <?php echo $noticias[$i]['Plataforma'] ?></h4>
              <p><?php echo $noticias[$i]['Descripcion'] ?>
              </p>
          </div>
         <?php } ?>  
        </div>




    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>