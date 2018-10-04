<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 02/10/18
 * Time: 14:13
 */


$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', '');

$sql = "INSERT INTO Article ('titre', 'contenu', 'auteur')
     VALUES ('bonjour', 'dfgerg', 'moi')";

$inserer = $pdo->exec($sql);



//$req = $bdd->prepare('INSERT INTO Article(titre, contenu, auteur)
//       VALUES(:titre, :contenu, :auteur)');


/* $req = $pdo->prepare('INSERT INTO Article(titre, contenu, auteur)
                      VALUES(:titre, :contenu, :auteur)');

$req->execute(array(
    ':titre' => $_POST["titre"],
    ':contenu' => $_POST["contenu"],
    ':auteur' => $_POST["auteur"]
)); */

//var_dump($_POST);

?>