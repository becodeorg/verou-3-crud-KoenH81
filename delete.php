<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - delete card</title>
</head>

<body>

    <h1>Goodcard - delete card</h1>

    <ul>

        <li>
            <p> ID: </p><?= $card['id'] ?>
        </li>
        <li>
            <p> Name: </p><?= $card['name'] ?>
        </li>
        <li>
            <p> HP: </p><?= $card['HP'] ?>
        </li>
        <li>
            <p> Foil: </p><?= $card['foil'] ?>
        </li>
        <li>
            <p> Price: </p><?= $card['price'] ?>
        </li>

    </ul>
    <p>Are you sure you wish to delete card with name <?= $card['name'] ?> ?</p>
    <form method="post" action="index.php?action=delete&card_id=<?= $card['id'] ?>">
        <input type="radio" id="yes" name="yes-no" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="yes-no" value="no">
        <label for="no">No</label><br>
        <input type="submit">
    </form>


</body>

</html>