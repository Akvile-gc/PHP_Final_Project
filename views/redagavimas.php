<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../styles/style.css">
    <title>Knygos redagavimas</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header_wrap">
                <div class="logo">
                    <a href="./biblioteka">
                        <img src=".././img/Library_Logo.png" alt="Kablelis - Bibliotekos logotipas">
                    </a>
                </div>
                <nav class="nav">
                    <ul class="p_0">
                        <li><a href="./knyga">Nauja knyga</a></li>
                        <li><a href="./visos_knygos">Visos knygos</a></li>
                        <li><a href="./paieska">Knygos paieška</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="form_main">
                <form method="POST" action="./redagavimas">
                    <legend>Redaguokite knygą:</legend>
                    <input type="hidden" name="id" value="<?php echo $edit?>">
                    <div class="form">
                        <label for="edit_name">Knygos pavadinimas</label>
                        <input type="text" name="edit_name" id="edit_name" value="<?php echo $books[$edit]['name'] ?>">
                    </div>
                    <div class="form">
                        <label for="edit_name">Autorius</label>
                        <input type="text" name="edit_author" id="edit_author" value="<?php echo $books[$edit]['author'] ?>">
                    </div>
                    <div class="form">
                        <label for="edit_name">Leidimo metai</label>
                        <input type="text" name="edit_year" id="edit_year" value="<?php echo $books[$edit]['year'] ?>">
                    </div>
                    <div class="form">
                        <label for="edit_name">Kalba</label>
                        <input type="text" name="edit_language" id="edit_language" value="<?php echo $books[$edit]['language'] ?>">
                    </div>
                    <div class="form">
                        <label for="edit_name">Vienetų skaičius</label>
                        <input type="text" name="edit_copies" id="edit_copies" value="<?php echo $books[$edit]['copies'] ?>">
                    </div>
                    <div class="form">
                        <input type="submit" name="edited" id="edited" value="Redaguoti">
                    </div>
                </form>
            </div>
        </main>
        <footer>
            <div class="copyright">
                <p class="copy">&copy; Copyright 2023 AGC</p>
            </div>
        </footer>
    </div>
</body>
</html>