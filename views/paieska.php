<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Knygos paieška</title>
</head>
<body>
    <form method="POST" action="./paieska">
        <legend>Įveskite knygos pavadinimą autorių:</legend>
        <input type="text" name="name_search" id="name_search" placeholder="Ieškoma knyga">
        <input type="submit" name="delete" id="delete" value="Ieškoti">
    </form>
    <button>
        <a href="./visos_knygos">Knygų sąrašas</a>
    </button>
</body>
</html>