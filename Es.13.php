<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CREA IMMAGINE</title>
    </head>
    <body>
        <?php
            function generaUrlImmagine ($larghezza, $altezza) {
                return "https://picsum.photos/$larghezza/$altezza";
            }

            $src = generaUrlImmagine (800, 700);

            echo "<img src='$src'>"

        ?>
        
    </body>
</html>