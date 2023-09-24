<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <br>

              <a href="/playlist/">your playlist</a>
              <br>

        </div>
        <div class="modal-footer">
          <a href="#" data-bs-dismiss="modal">Close</a>
          <a id="createPlaylistLink" href="/music/create">Create Playlist</a>

        </div>
      </div>
    </div>
</div>
<form action="/music/create" method="get">
    <input type="search" name="search" placeholder="search song">
    <button type="submit" class="btn btn-primary">search</button>
</form>
<h1>Music Player</h1>
<!-- Add the form for creating a playlist -->
<form action="/playlist/create" method="post">
    <label for="playlistName">Playlist Name:</label>
    <input type="text" id="playlistName" name="playlistName" required>
    <button type="submit" class="btn btn-success">Create Playlist</button>
</form>

</body>
</html>

