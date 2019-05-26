<?php
include_once './../src/setup.php';
include_once './layout/structure.php';
session_start();
try {
        $dbh = new PDO('mysql:host=localhost;dbname=plante', 'root', 'root');
} catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
}

$spawnRepository = new \Plante\PlanteRepository($dbh);
$plante = $planteRepository->fetchAll();
$plante["plante"] = $plante;

loadStructure('./view/accueil.php', 'acceuil', $plante);
