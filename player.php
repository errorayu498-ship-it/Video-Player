<?php

$videos = json_decode(file_get_contents("data/videos.json"), true);

$id = $_GET['id'];

$video = $videos[$id];

?>

<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="assets/style.css">

</head>

<body>

<div class="player">

<video id="video" controls>

<source src="<?php echo $video['url']; ?>" type="video/mp4">

</video>

<div class="progress">

<div class="progress-bar" id="bar"></div>

</div>

</div>

<script src="assets/script.js"></script>

</body>
</html>
