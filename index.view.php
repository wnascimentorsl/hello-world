<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Books</title>
</head>
<body>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?php echo $book['name'] ?></li>
            <ul>
                <li>
                    <?php echo $book['author'] ?>
                </li><br>
            </ul>
        <?php endforeach; ?>
        </ul>
</body>
</html>