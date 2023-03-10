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
<!--    --><?php
//    $task = $_POST['editId'];
//    $file = './to_do.json';
//    $tasks = file_get_contents($file);
//    $todoArray = json_decode($tasks, true);
//
//    $newContents = json_encode($todoArray, JSON_PRETTY_PRINT);
//    file_put_contents($file, $newContents);
//    ?>
    <form method="POST" action="./duomenys_atnaujinti">
        <legend>Redaguokite knygą:</legend>
        <input type="hidden" name="id" value="<?php echo $edit?>">
<!--        <input type="text" name="edit_book" value="--><?php //echo $books[$edit]['id'] ?><!--">-->
        <input type="text" name="edit_book" value="<?php echo $books[$edit]['name'] ?>">
        <input type="text" name="edit_book" value="<?php echo $books[$edit]['author'] ?>">
        <input type="text" name="edit_book" value="<?php echo $books[$edit]['year'] ?>">
        <input type="text" name="edit_book" value="<?php echo $books[$edit]['language'] ?>">
        <input type="text" name="edit_book" value="<?php echo $books[$edit]['copies'] ?>">
        <input type="submit">
    </form>

</body>
</html>