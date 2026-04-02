<?php

include "detect.php";

$url = $_GET['url'];

$video = detectVideo($url);

?>

<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="player">

<div class="loader"></div>

<div class="video-area">

<iframe id="player" src="<?php echo $video; ?>" allowfullscreen></iframe>

</div>

<div class="controls">

<button onclick="cinema()"> Cinema Mode</button>

<a href="<?php echo $url; ?>" download>
<button>Download</button>
</a>

</div>

</div>

<script src="script.js"></script>

</body>
</html>
