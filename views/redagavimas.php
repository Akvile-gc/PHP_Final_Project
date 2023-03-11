<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Knygos redagavimas</title>
</head>
<body>
    <form method="POST" action="./redagavimas">
        <legend>Redaguokite knygą:</legend>
        <input type="hidden" name="id" value="<?php echo $edit?>">
        <input type="text" name="edit_name" id="edit_name" value="<?php echo $books[$edit]['name'] ?>">
        <input type="text" name="edit_author" id="edit_author" value="<?php echo $books[$edit]['author'] ?>">
        <input type="text" name="edit_year" id="edit_year" value="<?php echo $books[$edit]['year'] ?>">
        <input type="text" name="edit_language" id="edit_language" value="<?php echo $books[$edit]['language'] ?>">
        <input type="text" name="edit_copies" id="edit_copies" value="<?php echo $books[$edit]['copies'] ?>">
        <input type="submit" name="edited" id="edited" value="Redaguoti">
    </form>
    <button>
        <a href="./visos_knygos">Knygų sąrašas</a>
    </button>
</body>
</html>