<?php 
if(!isset($_POST['search'])) exit('No se recibió el valor a buscar');

require_once 'conexion.php';

function search()
{
  $mysqli = getConnexion();
  $search = $mysqli->real_escape_string($_POST['search']);
  $query = "SELECT nombre FROM palabra WHERE nombre LIKE '$search%' ";
  $res = $mysqli->query($query);
  while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
    echo "<p>$row[nombre]</p>";
  }
}

search();