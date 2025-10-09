<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <ul>

        <?php foreach ($filteredByAge(40) as $brother) : ?>
            <a href="<?= $brother["url"] ?>">
                <li><?= $brother["name"] . " | " . $brother["age"] ?></li>
            </a>
        <?php endforeach ?>
    </ul>
</body>

</html>