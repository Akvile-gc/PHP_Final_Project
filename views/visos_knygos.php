<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visos knygos</title>
</head>
<body>
<div class="wrapper">
    <p>Turime šias knygas:</p>
    <table>
        <thead>
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
        <?php $total = 0?>
        <?php foreach ($bookList as $key => $book):?>
                <tr>
                    <td><?php echo $book['id'] ?></td>
                    <td><?php echo $book['name'] ?></td>
                    <td><?php echo $book['author'] ?></td>
                    <td><?php echo $book['year'] ?></td>
                    <td><?php echo $book['language'] ?></td>
                    <td><?php echo $book['copies'] ?></td>
<!--                    <td>--><?php //echo $book['copies'] ?><!--Redaguoti knygą</td>-->
<!--                    <td>--><?php //unset($bookList[$key])?><!--Trinti knygą</td>-->
                </tr>
        <?php endforeach; ?>
        </tbody>
<!--        <tfoot>-->
<!--        <tr style="font-weight: bold">-->
<!--            <td colspan="4">Total</td>-->
<!--            <td>--><?php //echo $total?><!--</td>-->
<!--        </tr>-->
<!--        </tfoot>-->
    </table>

    <!--        needs to change tax details to PAID-->
<!--    <div>-->
<!--        <form action="./total" method="POST">-->
<!--            <input type="submit" name="paid" id="paid" value="Deklaruoti ir sumokėti">-->
<!--        </form>-->
<!--    </div>-->
</div>


</body>
</html>