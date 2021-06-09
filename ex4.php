<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' href='style/style.css'/>
        <title>exercice 4</title>
    </head>
    <body>
        <header><center><strong>Utiliser des regexes</strong></center></header>
        <center><br/>
        <form action="ex4.php" method="post">
            <p>Prénom: <input type="text" name="firstname" placeholder="Marie" maxlength="20"></p>
            <p>Nom: <input type="text" name="lastname" placeholder="Golade" maxlength="20"></p>
            <p>Numéro: <input type="text" name="num" placeholder="xxxxxxxxxx" maxlength="10"></p>
            <p>Mail: <input type="text" name="mail" placeholder="marie.golade@gmail.com" maxlength="60"></p>
            <input type="submit" value="valider" />
        </form>
        <?php
            require 'regex.php';

            if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['num']) && isset($_POST['mail'])) {
                $email= $_POST['mail'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $num = $_POST['num'];
                if (!$firstname || !$lastname || !verifTel($num) || !verifEmail($email))
                    echo '<center id="error"><br />Veuillez remplir des informations valides.</center>';
                else
                    echo '<center id="success"><br />'. $firstname ." " .$lastname . " votre numéro est " . $num . " et votre email est " . $email . "</center>";

            }
        ?>
        </center>
        <footer><center><p><a href='ex5.php'>exercice 5</p></center></footer>
    </body>
</html>