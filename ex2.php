<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' href='style/style.css'/>
        <title>exercice 2</title>
    </head>
    <body>
        <header><center><strong>Vérifier un Formulaire</strong></center></header>
        <center><br/>
        <form action="ex2.php" method="post">
            <p>Prénom: <input type="text" name="firstname" placeholder="Marie"></p>
            <p>Nom: <input type="text" name="lastname" placeholder="Golade"></p>
            <p>Numéro: <input type="text" name="num" placeholder="xxxxxxxxxx"></p>
            <select name="choix">
                <option value="Epitech Lille" selected="selected">Epitech Lille</option>
                <option value="Epitech Paris">Epitech Paris</option>
                <option value="Epitech Marseille">Epitech Marseille</option>
                <option value="Epitech Rennes">Epitech Rennes</option>
            </select><br /><br />
            <input type="submit" value="valider" />
        </form>
        <?php
            if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['num']) && isset($_POST['choix'])) {
                $epi = $_POST['choix'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $num = $_POST['num'];
                if (!$firstname || !$lastname || !$num)
                    echo '<center id="error"><br />Veuillez remplir des informations valides.</center>';
                else
                    echo '<center id="success"><br />'. $firstname . " " . $lastname . " votre numéro est " . $num . " et vous êtes sur le campus de " . $epi . "</center>";
            }
        ?>
        </center>
        <footer><center><p><a href='ex3.php'>exercice 3</p></center></footer>
    </body>
</html>