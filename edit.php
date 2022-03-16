<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - edit card</title>
</head>

<body>

    <h1>Goodcard - edit card</h1>

    <ul>
        
            <li><p> ID: </p><?= $card['id'] ?></li>
            <li><p> Name: </p><?= $card['name'] ?></li>
            <li><p> HP: </p><?= $card['HP'] ?></li>
            <li><p> Foil: </p><?= $card['foil'] ?></li>
            <li><p> Price: </p><?= $card['price'] ?></li>
        
    </ul>
    <form method="post" action="index.php?action=edit&card_id=<?= $card['id'] ?>">
        <label for="edit">Edit:</label>
        <select id="edit" name="edit">
            <option value="name">Name</option>
            <option value="HP">HP</option>
            <option value="foil">Foil</option>
            <option value="price">Price</option>
        </select>
        <label for="value">to:</label>
        <input type="text" value="value" name="value">

        <input type="submit">
    </form>


</body>

</html>