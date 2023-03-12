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
    <div class="wrapper">
        <div class="form">
            <form method="POST" action="./paieska">
                <legend>Įveskite knygos pavadinimą:</legend>
                <input type="text" name="name_search" id="name_search" placeholder="Ieškoma knyga">
                <input type="submit" name="search_n" id="search_n" value="Ieškoti">
            </form>
        </div>
        <div class="form">
            <form method="POST" action="./paieska">
                <legend>Įveskite knygos autorių:</legend>
                <input type="text" name="author_search" id="author_search" placeholder="Ieškomas autorius">
                <input type="submit" name="search_a" id="search_a" value="Ieškoti">
            </form>
        </div>
        <button>
            <a href="./visos_knygos">Knygų sąrašas</a>
        </button>

    </div>
</body>
</html>