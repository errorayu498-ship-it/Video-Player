<?php
$url = $_GET['url'];
?>

<!DOCTYPE html>
<html>
<head>
<title>CordFlix</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="player-container">

<h2>Now Playing</h2>

<div class="video-box">

<iframe src="<?php echo $url; ?>" allowfullscreen></iframe>

</div>

<a href="index.php" class="back">Back</a>

</div>

</body>
</html>
