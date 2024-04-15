<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
</head>

<body class="background2">

    <header>
        <?php 
include("header.php");
?>
    </header>
    <main>
        <nav id="nogap">
            <?php
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
            echo "<h1>Postcode:</h1>";
            
            $postcode = $_POST['postcode'];
            echo'<h1>'.$postcode.'</h1>';
            }
            ?>
        </nav>
        <section class="gerechtendranken">
            <h1>Gerechten en dranken</h1>
            <form action="zoeken.php" method="POST">
                <h1>Product zoeken:</h1>
                <input name="keyword" type="text">
                <input name="productnaam" type="submit">
            </form>
            <?php
     include("connection.php");
     $sql = "SELECT * from eetproducten";
     $result=$conn->query($sql);
     
     if ($result->rowCount()> 0) {
        foreach ($result as $row) {
            echo "<div class=gerecht>";
            echo "<h1 >".$row["productnaam"]."</h1>";
            echo "<h1>".$row["omschrijving"]."</h1>";
            echo "<img id=imgstyling src='" . $row["afbeelding"] . "' alt='Beschrijving van de afbeelding'>";
            echo "<div class=voegtoe><h1 id=anderekleur>$ $row[prijs]</h1></div>";
            echo "</div>";
     } 
     }
     ?>
        </section>
    </main>
    <footer>
        <?php
        include ("footer.php");
        ?>
    </footer>
</body>

</html>