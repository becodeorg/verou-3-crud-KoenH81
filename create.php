<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - insert cards into database</title>
</head>

<body>

    <h1>Goodcard - insert cards into database</h1>

    <ul>
        <?php foreach ($cards as $card) : ?>
            <li><?= $card['ID'] ?></li>
            <li><?= $card['name'] ?></li>
            <li><?= $card['HP'] ?></li>
            <li><?= $card['foil'] ?></li>
            <li><?= $card['price'] ?></li>
        <?php endforeach; ?>
    </ul>
    <form method="post" action="index.php?action=create" >
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <label for="HP">HP</label>
        <input type="text" id="HP" name="HP">
        <label for="foil">foil</label>
        <input type="text" id="foil" name="foil">
        <label for="price">price</label>
        <input type="text" id="price" name="price">
        <input type="submit">
    </form>

</body>

</html>