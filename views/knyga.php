<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nauja knyga</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <div class="wrapper">
        <h1>Pridėkite naują knygą</h1>

        <div class="form_main">
            <form action="./knyga" method="POST">
                <div class="form">
                    <label for="name">Knygos pavadinimas</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="form">
                    <label for="author">Autorius</label>
                    <input type="text" name="author" id="author">
                </div>
                <div class="form">
                    <label for="year">Leidimo metai</label>
                    <input type="number" name="year" id="year">
                </div>
                <div class="form">
                    <label for="language">Kalba</label>
                    <input type="text" name="language" id="language">
                </div>
                <div class="form">
                    <label for="copies">Vienetų skaičius</label>
                    <input type="number" name="copies" id="copies">
                </div>
                <div class="form">
                    <input type="submit" name="new_book" id="new_book" value="Pridėti" class="button">
                </div>
            </form>
        </div>
        <div>
            <p><?php echo $message ?></p>
<!--            should include the message in p - if it's correct, it should say that the book was added correctly,
                if not - that person should enter the correct data-->

        </div>
        <div class="button_section">
            <a href="./knyga" class="button">Nauja knyga</a>
            <a href="./redagavimas" class="button">Knygos redagavimas</a>
            <a href="./visos_knygos" class="button">Visos knygos</a>
            <a href="./istrynimas" class="button">Knygos ištrynimas</a>
            <a href="./rezervacija.php" class="button">Knygos rezervacija</a>
            <a href="./paieska.php" class="button">Knygos paieška</a>
        </div>

    </div>

</body>
</html>