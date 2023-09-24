<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Player</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    body {
         font-family: Arial, sans-serif;
         text-align: center;
         background-color: #f5f5f5;
         padding: 20px;
     }

     h1 {
         color: #333;
     }

     #player-container {
         max-width: 400px;
         margin: 0 auto;
         padding: 20px;
         background-color: #fff;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
     }

     audio {
         width: 100%;
     }

     #playlist {
         list-style: none;
         padding: 0;
     }

     #playlist li {
         cursor: pointer;
         padding: 10px;
         background-color: #eee;
         margin: 5px 0;
         transition: background-color 0.2s ease-in-out;
     }

     #playlist li:hover {
         background-color: #ddd;
     }

     #playlist li.active {
         background-color: #007bff;
         color: #fff;
     }
     .audio{
            padding: 10px 20px;
            margin-top: 5px;
            width: 100%;
            border: none;
            outline: none;
            border-radius: 20px;
            box-shadow: inset -3px -3px rgba(0, 0, 0, 0.5);
            color: black;
            font-size: 1rem;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .musicName{
            padding: 10px 20px;
            margin-top: 5px;
            width: 100%;
            border: none;
            outline: none;
            border-radius: 20px;
            box-shadow: inset -3px -3px rgba(0, 0, 0, 0.5);
            color: black;
            font-size: 1rem;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .headTitle{
            color: black;
            font-size: 2rem;
            border-bottom: 4px solid rgba(255, 255, 255, 0.5);
            text-align: center;
            width: 40%;
            margin-left: 30%;
            background-color: grey ;
            margin-top: 1%;
        }
        .myPlaylist{
            margin-top: 1%;
        }
        .modal-footer{
            padding: 10px 20px;
            margin-top: 5px;
            width: 100%;
            border: none;
            outline: none;
            border-radius: 10px;
            background-color: lightgrey ;
            color: white;
            font-size: 1rem;
        }
        .modal-header h5{
            padding: 10px 20px;
            margin-top: 5px;
            width: 100%;
            border: none;
            outline: none;
            border-radius: 10px;
            background-color: lightgrey ;
            color: white;
            font-size: 1rem;
        }
        .search-song{
            padding: 10px 20px;
            margin-top: 5px;
            margin-left: 35%;
            width: 30%;
            border: none;
            outline: none;
            border-radius: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            box-shadow: inset -3px -3px rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 1rem;
        }
    </style>
</head>
<body style="background-color:">


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
          <a href="#" data-bs-toggle="modal" data-bs-target="#createPlaylist">Create New</a>

        </div>
      </div>
    </div>
  </div>
  <form action="/" method="get" class="search-song">
    <input type="search" name="search" placeholder="search-song">
    <button type="submit" class="btn btn-primary" style="color: black ">search</button>
  </form>
  <div class="headTitle">
    <h1 style="color:pink">Music Player</h1>
    </div>

    <div class="myPlaylist">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color:black">My Playlist
    </button>
    </div>

<div class="audio">
<audio id="audio" controls autoplay></audio>
</div>
 <div class="musicName">
<ul id="playlist">
<?php if ($mus): ?>
        <?php foreach ($mus as $main): ?>
            <li data-src="<?= base_url(); ?>/main/<?= $music['musicname'];?>.mp3"><?= $music['musicname']; ?>
              <a href="/addtoplaylist" class="hover-effect">
              </a>
            </li>
        <?php endforeach; ?>
<?php else: ?>
    <?php foreach ($main as $m): ?>
      <li data-src="<?= base_url(); ?>/music/<?= $m['musicname'];?>.mp3"><?= $m['musicname']; ?>
      <a href="/addtoplaylist" class="hover-effect">
      </a></li>
    <?php endforeach; ?>
<?php endif; ?>
</ul>
</div>

    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Select from playlist</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
          <form action="/" method="post">
            <!-- <p id="modalData"></p> -->
            <input type="hidden" id="musicID" name="musicID">
            <select  name="playlist" class="form-control" >

              <option value="playlist">playlist</option>

            </select>
            <input type="submit" name="add">
            </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
    <script>
    $(document).ready(function () {
  // Get references to the button and modal
  const modal = $("#myModal");
  const modalData = $("#modalData");
  const musicID = $("#musicID");
  // Function to open the modal with the specified data
  function openModalWithData(dataId) {
    // Set the data inside the modal content
    modalData.text("Data ID: " + dataId);
    musicID.val(dataId);
    // Display the modal
    modal.css("display", "block");
  }

  // Add click event listeners to all open modal buttons

  // When the user clicks the close button or outside the modal, close it
  modal.click(function (event) {
    if (event.target === modal[0] || $(event.target).hasClass("close")) {
      modal.css("display", "none");
    }
  });
});
    </script>
    <script>
        const audio = document.getElementById('audio');
        const playlist = document.getElementById('playlist');
        const playlistItems = playlist.querySelectorAll('li');

        let currentTrack = 0;

        function playTrack(trackIndex) {
            if (trackIndex >= 0 && trackIndex < playlistItems.length) {
                const track = playlistItems[trackIndex];
                const trackSrc = track.getAttribute('data-src');
                audio.src = trackSrc;
                audio.play();
                currentTrack = trackIndex;
            }
        }

        function nextTrack() {
            currentTrack = (currentTrack + 1) % playlistItems.length;
            playTrack(currentTrack);
        }

        function previousTrack() {
            currentTrack = (currentTrack - 1 + playlistItems.length) % playlistItems.length;
            playTrack(currentTrack);
        }

        playlistItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                playTrack(index);
            });
        });

        audio.addEventListener('ended', () => {
            nextTrack();
        });

        playTrack(currentTrack);
    </script>
</body>
</html>
