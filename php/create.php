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
          <h1>Creazione nuova stanza</h1>
            <form method="POST" action="create_response.php">
              <div class="form-group">
                <label for="room_number">Numero stanza:</label>
                <input class="form-control" type="text" placeholder="inserisci il numero della stanza" value="" name="room_number">
              </div>
              <div class="form-group">
                <label for="floor">Piano:</label>
                <input class="form-control" type="number" placeholder="inserisci il piano della stanza" value="" name="floor">
              </div>
              <div class="form-group">
                <label for="beds">Numero letti:</label>
                <input class="form-control" type="number" placeholder="inserisci il numero di letti della stanza" value="" name="beds">
              </div>
              <div class="form-group">
                <input type="submit" value="Crea" class="btn btn-success">
              </div>
            </form>
        </div>
      </div>
    </div>

    <?php
    include 'layout/_footer.php';
    ?>
  </body>
</html>
