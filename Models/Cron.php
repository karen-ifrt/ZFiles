<?php 
require('Connexion.php');

function date_expiration(){
    $current_date = date("m.d.y");
    $sql = "DELETE FROM 'z-files' WHERE 'date' >= NOW()";
    PDO::Exec($sql) or die('Erreur SQL !'.$sql.'<br>'.(0));
}
?>

