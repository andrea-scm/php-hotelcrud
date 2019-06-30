<?php
  include "db_connection.php";


  //recupero l'id da mostrare tramite la get recuperata dalla query
  $id_stanza = intval($_GET['id']);
  $sql = "SELECT * FROM stanze WHERE id = $id_stanza";
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
      include "layout/_header.php";
    ?>
    <div id="main" class="container">
      <div class="row">
        <div class="col-12">
          <h1>Modifica stanza id: <?php echo $id_stanza ?></h1>

          <?php
          if($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <form method="POST" action="edit_response.php">
              <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
              <div class="form-group">
                <label for="room_number">Numero stanza:</label>
                <input class="form-control" type="text" placeholder="numero stanza"
                  value="<?php echo $row['room_number'] ?>" name="room_number">
              </div>
              <div class="form-group">
                <label for="piano">Piano:</label>
                <input class="form-control" type="number" placeholder="piano"
                  value="<?php echo $row['floor'] ?>" name="floor">
              </div>
              <div class="form-group">
                <label for="beds">Numero letti:</label>
                <input class="form-control" type="number" placeholder="numero letti"
                  value="<?php echo $row['beds'] ?>" name="beds">
              </div>
              <div class="form-group">
                <input type="submit" value="Salva" class="btn btn-success">
              </div>
            </form>
            <?php
          } elseif($result) {
            echo "Non ci sono risultati";
          } else {
            echo "Si è verificato un errore";
          }
          ?>

        </div>
      </div>
    </div>

    <?php
      include 'layout/_footer.php';
      $conn->close();
    ?>
  </body>
</html>
