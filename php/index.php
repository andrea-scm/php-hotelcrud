<?php
  include  "db_connection.php";

  $sql = "SELECT * FROM stanze";
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
          <h1 class="float-left">Tutte le stanze dell'hotel</h1>
          <div class="float-right">
            <a href="create.php" class="btn btn-info" id="new_room_button">
              Inserisci una nuova stanza
            </a>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Room Number</th>
                <th class="text-center">Floor</th>
                <th class="text-center">Beds</th>
                <th class="text-right">Created At</th>
                <th class="text-right">Updated At</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
                if($result && $result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                      <td class="text-center"><?php echo $row['id'] ?></td>
                      <td class="text-center"><?php echo $row['room_number'] ?></td>
                      <td class="text-center"><?php echo $row['floor'] ?></td>
                      <td class="text-center"><?php echo $row['beds'] ?></td>
                      <td class="text-right"><?php echo $row['created_at'] ?></td>
                      <td class="text-right"><?php echo $row['updated_at'] ?></td>
                      <td class="text-center">
                        <a href="show.php?id=<?php echo $row['id'] ?>"
                          type="button" class="btn btn-primary">
                          Visualizza
                        </a>
                        <a href="edit.php?id=<?php echo $row['id'] ?>"
                          type="button" class="btn btn-secondary">
                          Modifica
                        </a>
                        <form method="POST" action="delete.php" class="form_cancellazione">
                          <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                          <input type="submit" value="Cancella" class="btn btn-danger">
                        </form>
                      </td>
                    </tr>
                    <?php
                  }
                } elseif($result) {
                  echo "Non ci sono risultati";
                } else {
                  echo "Si è verificato un errore";
                }
               ?>
             </tbody>
          </table>
        </div><!-- .col-12 -->
      </div><!-- .row -->
    </div><!-- .container -->

    <?php
      include 'layout/_footer.php';
      $conn->close();
    ?>
  </body>
</html>
