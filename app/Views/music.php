<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php include 'top.php'; ?>
    <?php include 'playlist.php'; ?>
    <?php include 'modal.php'; ?>
    <?php include 'scripts.php'; ?>

    <?php foreach ($music as $data): ?>
    <li class="playlist" data-src="<?= $data['music_title']?>">
        <?= $data['music_title'] ?>
        <a href="/music/remove/<?= $data['id'] ?>" class="btn btn-danger">Remove</a>
    </li>
<?php endforeach;?>

</body>
</html>