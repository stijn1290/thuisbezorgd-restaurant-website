<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>reserveren</title>
</head>

<body class="background1">
    <header>
        <?php
        include("header.php");
        ?>
    </header>
    <section class="flexaccount">
        <form action="reserverenform.php" class="reserverenblock" method="POST">
            <h1>Reserveren</h1>
            <h1>Naam:</h1>
            <input type="text" placeholder="voer u naam in" name="naam">
            <h1>E-mail:</h1>
            <input type="text" placeholder="voer u e-mail in" name="e-mail">
            <div>
                <h1 id="textmargin">Tijd en datum:</h1>
                <input type="date" name="datum">
                <select name="tijden">
                    <option value="17:00">17:00</option>
                    <option value="17:30">17:30</option>
                    <option value="18:00">18:00</option>
                    <option value="18:30">18:30</option>
                    <option value="19:00">19:00</option>
                    <option value="19:30">19:30</option>
                    <option value="20:00">20:00</option>
                </select>
            </div>
            <input type="submit" value="reserveren">
        </form>
    </section>
</body>

</html>