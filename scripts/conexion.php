<?php
        function getConexion(){
            $con = new mysqli("voleibol.localhost", "root", "", "voleibol");
            return $con;
        }

        if(!getConexion())
        {
          echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
        }      
        
  
  
  //echo("estoy en usarBD");
  //$conexion = mysql_connect("localhost","root","root");
  //$baseDeDatos = mysql_select_db("agenda",$conexion);
  
?>
