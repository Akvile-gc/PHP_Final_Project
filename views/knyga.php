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
            <h1>Pridėkite naują knygą</h1>

            <div class="form_main">
                <form action="./knyga" method="POST">
                    <div class="form">
                        <label for="name">Knygos pavadinimas</label>
                        <input type="text" name="name" id="name" placeholder="Nauja knyga">
                    </div>
                    <div class="form">
                        <label for="author">Autorius</label>
                        <input type="text" name="author" id="author" placeholder="Vardas Pavardė">
                    </div>
                    <div class="form">
                        <label for="year">Leidimo metai</label>
                        <input type="number" name="year" id="year" placeholder="xxxx">
                    </div>
                    <div class="form">
                        <label for="language">Kalba</label>
                        <input type="text" name="language" id="language" placeholder="Kalba">
                    </div>
                    <div class="form">
                        <label for="copies">Vienetų skaičius</label>
                        <input type="number" name="copies" id="copies" placeholder="x">
                    </div>
                    <div class="form">
                        <input type="submit" name="new_book" id="new_book" value="Pridėti" class="button">
                    </div>
                </form>
            </div>
            <div>
                <p class="text"><?php echo $message ?></p>
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