<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
        <body>

            <form action="page2.php" method="get">
                VALEUR:<input type="text" name="name">
                <input type="submit">
            </form>
            <br>
            <?php echo $_GET["name"]; ?>

        </body>
</html>