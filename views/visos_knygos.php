<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../styles/style.css">
    <title>Visos knygos</title>
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
            <h1>Turime šias knygas:</h1>
            <div class="table_wrapper">
                <table>
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Knygos pavadinimas</td>
                        <td>Autorius</td>
                        <td>Leidimo metai</td>
                        <td>Kalba</td>
                        <td>Kopijų sk.</td>
                        <td colspan="2"></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($bookList as $key => $book):?>
                        <tr>
                            <td><?php echo $book['id'] ?></td>
                            <td><?php echo $book['name'] ?></td>
                            <td><?php echo $book['author'] ?></td>
                            <td><?php echo $book['year'] ?></td>
                            <td><?php echo $book['language'] ?></td>
                            <td><?php echo $book['copies'] ?></td>
                            <td>
                                <form method="POST" action="./visos_knygos">
                                    <input type="hidden" name="id" value="<?php echo $key ?>">
                                    <input type="submit" value="Redaguoti">
                                </form>
                            </td>
                            <td>
                                <form method="POST" action="./visos_knygos">
                                    <input type="hidden" name="idDelete" value="<?php echo $key ?>">
                                    <input type="submit" value="Ištrinti">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
        <footer class="footer">
            <div class="copyright">
                <p class="copy">&copy; Copyright 2023 AGC</p>
            </div>
        </footer>
    </div>
</body>
</html>