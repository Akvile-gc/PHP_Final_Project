<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../styles/style.css">
    <title>Knygos ištrynimas</title>
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