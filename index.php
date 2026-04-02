<?php
$videos = json_decode(file_get_contents("data/videos.json"), true);
?>

<!DOCTYPE html>
<html>
<head>
<title>Video Portal</title>
<link rel="stylesheet" href="assets/style.css">
</head>

<body>

<header class="topbar">
<h1>Cord Flix</h1>
</header>

<div class="grid">

<?php foreach($videos as $video){ ?>

<div class="card">

<img src="<?php echo $video['thumbnail']; ?>">

<div class="overlay">

<a href="player.php?id=<?php echo $video['id']; ?>"> Play
</a>

</div>

</div>

<?php } ?>

</div>

<script src="assets/script.js"></script>

</body>
</html>
