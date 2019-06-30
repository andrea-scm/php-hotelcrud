<?php
  include "db_connection.php";

  if(empty($_POST)) {
    echo "si è verificato un errore";
    exit();
  }

  //recupero i dati della POST
  $room_number = intval($_POST['room_number']);
  $floor = intval($_POST['floor']);
  $beds = intval($_POST['beds']);
  $sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES ($room_number, $floor, $beds, NOW(), NOW())";
  $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hotelcrud</title>
    <link rel="stylesheet" type='text/css' href="../public/css/main_style.css">
  </head>
  <body>
    <?php
      include 'layout/_header.php';
    ?>
    <div id="main" class="container">
      <div class="row">
        <div class="col-12">
          <?php if($result) { ?>
            <h1>Stanza inserita con successo!</h1>
          <?php } else { ?>
            <h1>Si è verificato un errore. Riprova o contatta l'amministratore.</h1>
          <?php } ?>
          <a href="index.php" class="btn btn-primary">Torna alla home</a>
        </div><!-- .col-12 -->
      </div><!-- .row -->
    </div><!-- .container -->
    <?php
      include 'layout/_footer.php';
      $conn->close();
    ?>
  </body>
</html>
