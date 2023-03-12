<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paieškos rezultatai</title>
</head>
<body>
    <div class="wrapper">
        <table>
            <thead>
            <?php if (!empty($result)):?>
            <p>Turime šias knygas:</p>
            <tr style="font-weight: bold">
                <td>ID</td>
                <td>Knygos pavadinimas</td>
                <td>Autorius</td>
                <td>Leidimo metai</td>
                <td>Kalba</td>
                <td>Kopijų sk.</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $book):?>
                <tr>
                    <td><?php echo $book['id'] ?></td>
                    <td><?php echo $book['name'] ?></td>
                    <td><?php echo $book['author'] ?></td>
                    <td><?php echo $book['year'] ?></td>
                    <td><?php echo $book['language'] ?></td>
                    <td><?php echo $book['copies'] ?></td>
                </tr>
            <?php endforeach; ?>
            <?php else:?>
            <p>Rezultatų nėra.</p>
            <?php endif;?>
            </tbody>
        </table>

        <button>
            <a href="./visos_knygos">Knygų sąrašas</a>
        </button>
    </div>
</body>
</html>