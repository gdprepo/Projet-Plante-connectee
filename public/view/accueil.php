<ul class="list-group">
    <?php

        $index =0;

        $array = $data["plante"][$index];

        $_SESSION['newsession'] = $index;
    ?>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="card carousel-inner">
        <div class="carousel-item active">
          <h5 class="card-header"><?php echo $array["id"];?> - <?php echo $array["name"]; ?></h5>
          <img style="" class="d-block w-100" src="<?php echo $array["picture_url"] ?>" alt="First slide">
          <h6 class="card-text" style="text-align:center; margin-top:10px;">Categorie : <?php echo $array["categorie"]; ?></h6>
          <p class="card-text" style="text-align:center; margin-top:10px;">Description : <?php echo $array["description"]; ?></p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Humydite : <?php echo $array["humydite"]; ?> %</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Temperature : <?php echo $array["temperature"]; ?> °C</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Luminosite : <?php echo $array["luminosite"]; ?> %</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Periode : <?php echo $array["periode"]; ?> semaine(s)</p>
          <a href="www.google.com" class="btn btn-primary" style="width:180px; margin-right:0%; margin-left:40%; margin-top:15px;">Lien</a>
        </div>
        <?php $i=1; ?>
        <?php foreach ($data["plante"] as $array): ?>
        <div class="carousel-item">
          <?php $array = $data["plante"][$i++]; ?>
          <h5 class="card-header"><?php echo $array["id"];?> - <?php echo $array["name"]; ?></h5>
          <img style="" class="d-block w-100" src="<?php echo $array["picture_url"] ?>" alt="First slide">
          <h6 class="card-text" style="text-align:center; margin-top:10px;">Categorie : <?php echo $array["categorie"]; ?></h6>
          <p class="card-text" style="text-align:center; margin-top:10px;">Description : <?php echo $array["description"]; ?></p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Humydite : <?php echo $array["humydite"]; ?> %</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Temperature : <?php echo $array["temperature"]; ?> °C</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Luminosite : <?php echo $array["luminosite"]; ?> %</p>
          <p class="card-text" style="text-align:center; margin-top:10px;">Periode : <?php echo $array["periode"]; ?> semaine(s)</p>
          <a href="www.google.com" class="btn btn-primary" style="width:180px; margin-right:0%; margin-left:40%; margin-top:15px;">Lien</a>
        </div>
        <?php endforeach;?>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</ul>
<?php
    function precedent()
    {
      --$index;
    }

    function suivant()
    {
        echo "okok";
        ++$index;
        if ($index == 0) {
            $index = 30;
        }
    }

    if(array_key_exists('demo', $_POST)) {
        precedent();
    } elseif (array_key_exists('demo2', $_POST)) {
        suivant();
    }

?>
<script>
    function toogleProjetForm(id) {
        $('.projet-row-' + id).toggle();
        $('.form-projet-row-' + id).toggle();
    }
    function randBdd(array) {
        $array = $data["spawn"][rand(0, count($data["spawn"])-1)]
    }
</script>
