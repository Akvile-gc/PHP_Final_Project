<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../styles/style.css">
    <title>Knygos paieška</title>
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
                <form method="POST" action="./paieska">
                    <label for="name_search">Įveskite knygos pavadinimą:</label>
                    <input type="text" name="name_search" id="name_search" placeholder="Ieškoma knyga">
                    <input type="submit" name="search_n" id="search_n" value="Ieškoti">
                </form>
            </div>
            <div class="form_main">
                <form method="POST" action="./paieska">
                        <label for="author_search">Įveskite knygos autorių:</label>
                        <input type="text" name="author_search" id="author_search" placeholder="Ieškomas autorius">
                        <input type="submit" name="search_a" id="search_a" value="Ieškoti">
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