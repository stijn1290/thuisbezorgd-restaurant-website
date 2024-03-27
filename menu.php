<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet"  href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background2"></div>
    
<header>
<?php 
include("header.php");
?>
</header>
<div class="background2"></div>
<main>
    <section class="gerechtendranken">
        <h1>Gerechten</h1>
     <?php
     include("connection.php");
     $sql = "SELECT * from eetproducten";
     $result=$conn->query($sql);
     
     if ($result->rowCount()> 0) {
        foreach ($result as $row) {
            echo "<div class=gerecht>";
            echo "<div class=algemeen>";
            echo "<h1 id=product>".$row["productnaam"]."</h1>";
            echo "<h1>".$row["omschrijving"]."</h1>";
            echo "<div class=voegtoe><h1 id=entertext>$ $row[prijs]</h1></div>";
            echo "</div>";
            echo "<img id=imgstyling src='" . $row["afbeelding"] . "' alt='Beschrijving van de afbeelding'>";
            echo "</div>";
     } 
     }
     ?>
     <h1>dranken</h1>
     <?php
     include("connection.php");
     $sql = "SELECT * from drankproducten";
     $result=$conn->query($sql);
     
     if ($result->rowCount()> 0) {
        foreach ($result as $row) {
            echo "<div class=gerecht>";
            echo "<div class=algemeen>";
            echo "<h1 id=product>".$row["productnaam"]."</h1>";
            echo "<h1>".$row["omschrijving"]."</h1>";
            echo "<div class=voegtoe><h1 id=entertext>$ $row[prijs]</h1></div>";
            echo "</div>";
            echo "<img id=imgstyling src='" . $row["afbeelding"] . "' alt='Beschrijving van de afbeelding'>";
            echo "</div>";
     } 
     }
     ?>
    </section>
</main>
<footer>
    <?php
    include("footer.php");
    ?>
</footer>
</body>
</html>