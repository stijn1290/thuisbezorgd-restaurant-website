<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="background1"></section>
    <header>
        <?php
        include("header.php");
        ?>
    </header>
    <section class="flexaccount">
        
        <form action="contactform.php" method="POST" class="accountblock">
            <h1>Neem contact op</h1>
            <input type="text" name="naam" placeholder="voer u naam in">
            <input type="text" name="e-mail" placeholder="voer u e-mail adres in">
            <input type="text" name="bericht" placeholder="voer een bericht in" id="berichtbox">
            <input type="submit" value="verzenden">
        </form>
    </section>
</body>
</html>