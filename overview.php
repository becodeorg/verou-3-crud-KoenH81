<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>

<body>

    <h1>Goodcard - track your collection of Pokémon cards</h1>

    <ul>
        <?php foreach ($cards as $card) : ?>
            <li><?= $card['id'] ?></li>
            <li><?= $card['name'] ?></li>
            <li><?= $card['HP'] ?></li>
            <li><?= $card['foil'] ?></li>
            <li><?= $card['price'] ?></li>
        <?php endforeach; ?>
    </ul>
    <form method="POST">
        <label for="id">ID</label>
        <input type="text" id="id" name="id">
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