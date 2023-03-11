<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Knygos ištrynimas</title>
</head>
<body>
    <form method="POST" action="./istrynimas">
        <legend>Patvirtinkite knygos ištrynimą:</legend>
        <input type="hidden" name="idDelete" value="<?php echo $delete?>">
        <p>
            <?php echo
                $books[$delete]['name'] . ' ' .
                $books[$delete]['author'] . ' ' .
                $books[$delete]['year'] . ' ' .
                $books[$delete]['language'] . ' ' .
                $books[$delete]['copies']
            ?>
        </p>
        <input type="submit" name="delete" id="delete" value="Ištrinti">
    </form>
    <button>
        <a href="./visos_knygos">Knygų sąrašas</a>
    </button>
</body>
</html>