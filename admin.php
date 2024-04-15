<?php
include("connection.php");
session_start();
if ($_SESSION['rol']== 'admin'){

?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>

<body class="background1">
    <div class="blockbeheer2"><a href="index.php">
            <h1>beheer verlaten</h1>
        </a></div>
    <section class="stylingadminsections">
        <div class="blockbeheer">
            <h1 id="anderekleur">toevoegen</h1>
        </div>
        <form action="toevoegen.php" method="POST" class="autostyle" id="autostyleanders">
            <h1>vul de gegevens in om een product toe te voegen</h1>
            <nav>
                <h1>Productnaam:</h1>
                <input type="text" name="productnaam" id=>
            </nav>
            <nav>
                <h1>Omschrijving:</h1>
                <input type="text" name="productbeschrijving" id=>
            </nav>
            <nav id="gapbetween">
                <h1>Prijs:</h1>
                <input type="text" name="productprijs">
            </nav>
            <input type="submit" value="aanmaken">
        </form>
    </section>
    <section class="stylingadminsections">
        <div class="blockbeheer">
            <h1 id="anderekleur">verwijderen</h1>
        </div>
        <h1>Welk product wil je verwijderen</h1>
        <?php
        include("connection.php");
        $sql = "SELECT `id`, `productnaam`, `prijs`, `omschrijving`, `afbeelding` FROM `eetproducten`";
        $result=$conn->query($sql);
        foreach ($result as $row) {
            echo '<form action="verwijderen.php" method="POST" class="autostyle">';
            echo '<input name="id" value=" '. $row["id"] .' ">';
            echo '<input name="productnaam" value=" '. $row["productnaam"] .' " disabled>';
            echo '<input type="submit" value="verwijderen">';
            echo '</form>';
        }
        ?>
    </section>
    <section class="stylingadminsections">
        <div class="blockbeheer">
            <h1 id="anderekleur">aanpassen</h1>
        </div>
        <h1>Welk product wil je aanpassen</h1>
        <?php
        include('connection.php');
        $sql = "SELECT `id`, `productnaam`, `omschrijving` FROM `eetproducten` ";
        $result=$conn->query($sql);
        foreach ($result as $row) {
            echo '<form action="aanpassen.php" method="POST" class="aanpassenstyle">';
            echo '<h1> '.$row["id"]. '</h1>';
            echo '<h1>'. $row['productnaam'] .'</h1>';
            echo '<input name="omschrijving" value="'. $row["omschrijving"].'">';
            echo '<input type="submit" value="aanpassen">';
            echo '</form>';
        }
        ?>
    </section>
</body>

</html>
<?php
}
elseif($_SESSION['controle']){
    header('location:gebruiker.php');
}
else{
    header('location:account.php');
}
?>