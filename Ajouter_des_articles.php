<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 02/10/18
 * Time: 14:13
 */

$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');

if(!empty($_POST)) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $adresse = htmlspecialchars($_POST['adresse']);
}

$sql = "INSERT INTO eleves(prenom, nom, adresse) VALUES ('$prenom', '$nom', '$adresse')";
$rowCount = $pdo->exec($sql);

/*
$req = $pdo->prepare('INSERT INTO eleves(prenom, nom, adresse,)
                                VALUES(":prenom", ":nom", ":adresse")');
$req->bindValue(":prenom", '$prenom', PDO::PARAM_STR);
$req->bindValue(":nom", '$nom', PDO::PARAM_STR);
$req->bindValue(":adresse", '$adresse', PDO::PARAM_STR);
//var_dump($req);
$req->execute();
*/

//var_dump($eleves);

$res = $pdo->query("SELECT * FROM eleves");
$eleves = $res->fetchAll();

?>

<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>formulaire</title>

</head>
<body>

    <form action="" method="post">

        <div>
            <label for="prenom">prenom</label>
            <input type="text" name="prenom" id="prenom" placeholder="prenom" value="">
        </div>

        <div>
            <label for="nom">nom</label>
            <input type="text" name="nom" id="nom" placeholder="nom" value="">
        </div>

        <div>
            <label for="adresse">Textarea</label>
            <textarea name="adresse" id="adresse" rows="3" value=""></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>


    <table>
        <thead>
            <tr>
                <td>prenom</td>
                <td>nom</td>
                <td>adresse</td>
            </tr>
        </thead>
        <tbody>

                <?php foreach ($eleves as $value) {
                    echo "<tr><td>" . $value["prenom"] . "</td>";
                    echo "<td>" . $value["nom"] . "</td>";
                    echo "<td>" . $value["adresse"] . "</td></tr>";
                }
                ?>
        </tbody>
    </table>
</body>

</html>

