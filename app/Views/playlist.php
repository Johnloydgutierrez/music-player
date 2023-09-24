<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/music/upload" method="post" enctype="multipart/form-data">
        <input type="file" name="music_file" accept=".mp3">
        <button type="submit" class="btn btn-primary">Upload Music</button>
    </form>
<audio id="audio" controls autoplay type="audio?mpeg"></audio>
    <ul id="playlist">
     <?php foreach ($music as $data): ?>
        <li  class="playlist" data-src="  <?= $data['music_title']?>">
        <?= $data['music_title']?>]
        </li>
        <?php endforeach;?>

    </ul>
</ul>
</body>
</html>