<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' href='style/style.css'/>
        <title>exercice 3</title>
    </head>
    <body>
        <header><center><strong>Upload un fichier</strong></center></header>
        <center><br/>
        <form action="ex3.php" method="post" enctype="multipart/form-data">
            <p>Selectionnez un fichier :</p></br>
            <input type="file" name="namefile" /><br />
            <input type="submit" name="Upload file" />
        </form>
        <?php
          if (isset($_FILES['namefile']) && $_FILES['namefile']['error'] == UPLOAD_ERR_OK) {
            if ($_FILES['namefile']['size'] <= 999999) {
                $fileInfo = pathinfo($_FILES['namefile']['name']);
                $tmpName = $_FILES['namefile']['tmp_name'];
                $extensionFile = $fileInfo['extension'];
                $extensionParse = array('png', 'jpeg', 'jpg', 'sh', 'json', 'pdf');
                if (in_array($extensionFile, $extensionParse)) {
                    move_uploaded_file($tmpName, 'uploadFile/' . basename($_FILES['namefile']['name']));
                    echo '<br /> Le fichier a bien été envoyé';
                }
            }
          }
        ?>
        </center>
        <footer><center><p><a href='ex4.php'>exercice 4</p></center></footer>
    </body>
</html>