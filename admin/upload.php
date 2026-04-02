<?php

if(isset($_FILES['video'])){

$name = $_FILES['video']['name'];

move_uploaded_file($_FILES['video']['tmp_name'],"../uploads/".$name);

}

?>

<!DOCTYPE html>

<html>

<body>

<form method="POST" enctype="multipart/form-data">

<input type="file" name="video">

<button>Upload</button>

</form>

</body>

</html>
