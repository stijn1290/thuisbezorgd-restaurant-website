<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
</head>

<body class="background1">
    <header>
        <?php
    include("header.php");
    ?>
    </header>
    <section class="flexaccount">
        <form action="index.php" class="ingelogd">
            <?php
            session_start();
            echo "<h1>"."Welkom: ".$_SESSION['username']."</h1>";
            ?>
            <input type="submit" value="uitloggen">
        </form>
    </section>
</body>

</html>