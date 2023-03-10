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
    <h1>Jūs ištrynėte knygą:</h1>
    <p><?php print_r($books[$id]) ?></p>
<!--    Maybe enter the book details-->
    <br>
    <button>
        <a href="./visos_knygos">Knygų sąrašas</a>
    </button>
</body>
</html>