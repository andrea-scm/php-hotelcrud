<?php
  include "db_connection.php";

  if(empty($_POST)) {
    echo "si è verificato un errore";
    exit();
  }

  //recupero l'id da eliminare dalla POST
  $id_stanza = intval($_POST['id']);
  $sql = "DELETE FROM stanze WHERE id = $id_stanza";
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
            <h1>Stanza cancellata</h1>
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
