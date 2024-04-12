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

<body>
    <section class="background1"></section>
    <header>
        <?php 
include("header.php");
?>
    </header>
    <main>
        <section class="block">
            <form action="menu.php" id="postcode" method="POST">
                <h1>Wat is u postcode?</h1>
                <input type="text" name="postcode" placeholder="voer u postcode in">
                <input type=submit value=enter id=enter>
            </form>
        </section>
    </main>
    <footer>
        <?php 
    include("footer.php");
    ?>
    </footer>
</body>

</html>