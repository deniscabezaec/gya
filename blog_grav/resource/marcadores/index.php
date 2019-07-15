<!DOCTYPE HTML>
<html>
  <head>
    <title> Test</title>
    <meta content="">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script src="https://aframe.io/releases/0.6.0/aframe.min.js"></script>
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  </head>
  
  
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs='sourceType: webcam;'>
      <!-- handle marker with your own pattern -->
      <a-marker type='pattern' url='path/to/lab2.patt'>
        
      <?php

        $row;
        $link = require('conexion.php');
        
        /*$result = mysqli_query($link,  "SELECT * FROM horario
         WHERE CURTIME() between hora_inicio and hora_final");*/
        
        $result = mysqli_query($link,  "SELECT * FROM horario
         WHERE hora_inicio between '16:00:00' and '18:00:00'");

        while ($row = mysqli_fetch_array($result)) {
          echo '<a-text value="
          Materia:  '. $row['materia']
          .'Encargado:  '. $row['encargado']
          .'Hora de Inicio:  '. $row['hora_inicio']
          .'Hora Final:  '. $row['hora_final']
          
          .'" rotation="-90 0 0" color="green" height="2.5" width="2.5" position="-0.8 0.5 0"></a-text>';
        }

        mysqli_close($link);
      ?>
        
        <a-plane color="#fff" height="1" width="2" rotation="-90 0 0"></a-plane>
      </a-marker>
        
      <!-- add a simple camera -->
      <a-entity camera></a-entity>
      
    </a-scene>
    
  </body>
</html>