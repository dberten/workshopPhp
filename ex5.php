<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' href='style/style.css'/>
        <title>exercice 5</title>
    </head>
    <body>
        <header><center><strong>Générer un QrCode</strong></center></header>
        <center><br/>
        <form action="ex5.php" method="post">
            <p>url: <input type="text" name="url" placeholder="https://monsite.com"></p>
            <input type="submit" value="valider" />
        </form>
        <?php
            require 'lib/phpqrcode/phpqrcode/qrlib.php';
            require "qrcode.php";
            if (isset($_POST['url'])) {
                $url = $_POST['url'];
                if (!verifUrl($url))
                    echo '<center id="error"><br />Veuillez remplir des informations valides.</center>';
                else
                    QR_CODE($url);
            }
        ?>
        </center>
    </body>
</html>