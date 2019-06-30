<?php
  include "db_config.php";

  //connesione
  $conn = new mysqli($servername,$username,$password,$db_name);

  //controllo che la connessione sia andata a buon fine
  if ($conn && $conn->connect_error) {
    echo ("Connection failed: ". $conn->connect_error);
    exit();
  }
?>
