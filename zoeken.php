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
        <section class="gerechtendranken">
            <h1>Gerechten en dranken</h1>
            <form action="zoeken.php" method="POST">
                <h1>Product zoeken:</h1>
                <input name="keyword" type="text">
                <input name="productnaam" type="submit">
            </form>
            <?php
include("connection.php");

$keyword = "%" . $_POST['keyword']. "%";
$sql = "SELECT * FROM eetproducten WHERE productnaam LIKE :keyword";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':keyword', $keyword);
$stmt->execute();
$results = $stmt->fetchAll();
if(count($results)>0){
    foreach($results as $row){
        ?>
            <div class=gerecht>
                <?php 
        echo "<h1 >".$row["productnaam"]."</h1>";
        echo "<h1> ".$row["omschrijving"]."</h1>";
        echo "<img id=imgstyling src='" . $row["afbeelding"] . "' alt='Beschrijving van de afbeelding'>";
        echo "<div class=voegtoe><h1 id=anderekleur>$ $row[prijs]</h1></div>";
        ?>
            </div>
            <?php
    }
}
?>
        </section>
    </main>

</html>