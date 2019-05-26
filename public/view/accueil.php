<ul class="list-group">
    <?php foreach ($data["plante"] as $projet): ?>
    <li class="">
        <div class="card" style="padding:5px; margin-bottom:50px;">
            <h5 class="card-header"><?php echo $projet["id"];?> - <?php echo $projet["name"]; ?></h5>
            <div class="card-body">
                <a href="www.google.com">
                    <img class="img-fluid" src="<?php echo $projet["picture_url"] ?>" style="max-heigth: 100px;margin-left:1%;margin-right:auto;"><img>
                </a>
                <h6 class="card-text" style="text-align:left; margin-top:10px;">Categorie : <?php echo $projet["categorie"]; ?></h6>
                <p class="card-text" style="text-align:left; margin-top:10px;">Description : <?php echo $projet["description"]; ?></p>
                <p class="card-text" style="text-align:left; margin-top:10px;">Humydite : <?php echo $projet["humydite"]; ?> %</p>
                <p class="card-text" style="text-align:left; margin-top:10px;">Temperature : <?php echo $projet["temperature"]; ?> °C</p>
                <p class="card-text" style="text-align:left; margin-top:10px;">Luminosite : <?php echo $projet["luminosite"]; ?> %</p>
                <a href="www.google.com" class="btn btn-primary" style="width:180px; margin-right:5%; margin-left:auto; margin-top:15px;">Lien</a>
            </div>
        </div>
    </li>
    <li class="admin-mode <?php echo "form-projet-row-" . $projet["id"] ?>">
        <div class="card-body">
            <form action="/editProjet.php" method="post" class="form-inline">
                <input type="hidden" name="id" value= <?php echo $projet["id"]?> />
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <input placeholder="Titre" type="text" name="name" value="<?php echo $projet["name"]; ?>">
                        </div>
                        <div class="col-md-4">
                            <input placeholder="Lien Image" type="text" name="categorie" value="<?php echo $projet["categorie"]; ?>">
                        </div>
                        <div class="col-md-3">
                            <input placeholder="Logiciel" type="text" name="description" value="<?php echo $projet["description"]; ?>">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-4">
                            <input placeholder="Lien Projet" type="text" name="picture_url" value="<?php echo $projet["picture_url"]; ?>">
                        </div>
                        <div class="col-md-3">
                            <input placeholder="Logiciel" type="text" name="description" value="<?php echo $projet["humydite"]; ?>">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-4">
                            <input placeholder="Lien Projet" type="text" name="picture_url" value="<?php echo $projet["temperature"]; ?>">
                        </div>
                        <div class="col-md-3">
                            <input placeholder="Logiciel" type="text" name="luminosite" value="<?php echo $projet["luminosite"]; ?>">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-4">
                            <input placeholder="Lien Projet" type="text" name="periode" value="<?php echo $projet["periode"]; ?>">
                        </div>
                        <div style="margin-left: 30%;" class="col-md-2">
                            <button style="width: 100%;" class="btn btn-danger" type="submit" value="Ok">Ok</button>
                        </div>
                        <div class="col-md-2">
                            <button style="width: 100%;" class="btn btn-danger" type="button" value="Cancel" onclick="toogleProjetForm(<?php echo  $projet["id"] ?>)">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </li>
    <?php endforeach;?>
    <div class="card admin-mode" style="margin:10px; padding:5px;">
        <h6 class="card-header">Ajouter un projet</h6>
        <li class="list-group-item">
            <form action="/addProjet.php" method="post" class="form-inline">
                <div class="container" style="margin: 10px">
                    <div class="row">
                        <div class="col-md-6">
                            <input placeholder="Titre" type="text" name="title">
                        </div>
                        <div class="col-md-6">
                            <input placeholder="Picture" type="text" name="picture">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-6">
                            <input placeholder="Logiciel" type="text" name="logiciel">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-6">
                            <input placeholder="Lien" type="text" name="lien">
                        </div>
                        <div class="col-md-2">
                            <button style="margin-left:250%; margin-top:50px; width:200px" class="btn btn-danger" type="submit" value="Ok">Ok</button>
                        </div>
                    </div>
                </div>
            </form>
        </li>
    </div>
</ul>
<script>
    function toogleProjetForm(id) {
        $('.projet-row-' + id).toggle();
        $('.form-projet-row-' + id).toggle();
    }
</script>
