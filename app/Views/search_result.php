<!-- search_results.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    <ul>
        <?php foreach ($music as $data): ?>
            <li><?= $data['music_title'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
