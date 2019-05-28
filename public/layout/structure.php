<?php

function loadStructure($page, $title, $data) {
    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <title><?php echo $title; ?></title>
        <?php include_once "include-headers.html"?>
      </head>
      <body>
        <?php include_once "header.php"?>
        <div class="container-fluid main-container">
          <div class="row">

            <div>
              <button id="demo" onclick="toggleAdmin()" type="button" class="btn btn-dark btn-admin">Modifier la BDD</button>
            </div>
            <div class="col-md-8">
              <?php require_once $page ?>
            </div>
          </div>
        </div>
        <?php include_once "footer.php"?>
        <script>
          function toggleAdmin() {
            $('.admin-mode').toggle();
          }
        </script>
      </body>
    </html>
    <?php
}
?>
