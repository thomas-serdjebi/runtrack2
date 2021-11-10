<?php

session_start ();

foreach ($_GET as $value)
$_SESSION['prenom'] = $value;



?>

<html>
    <body>
        <form action="./index.php" method="get">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" type="prenom">
            <button type="submit" name="submit">Submit</button>
            <button type="submit" name="reset">Reset</button>
        </form>

        <p> Voici la liste des prénoms de la session :

        <?php echo $_SESSION['prenom'] ?>
        </p>


    </body>
</html>



