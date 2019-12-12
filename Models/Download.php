<?php

// Upload d'un fichier

require('Connexion.php');

function getUpload($url) {
    global $bdd;
    $statement = $bdd->prepare('SELECT * FROM files WHERE url = ?');
    $statement->execute(array($url));
    $upload = $statement->fetch();
    return $upload;
}

function getImages($url) {
    global $bdd;
    $statement = $bdd->prepare('SELECT relation.id_file, relation.id_img, images.name, images.id FROM relation INNER JOIN images ON relation.id_img = images.id INNER JOIN files ON relation.id_file = files.id WHERE url = ?');
    $statement->execute(array($url));
    $img = $statement->fetchAll();
    return $img;
}

