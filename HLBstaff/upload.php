<?php
//getting user uploaded file

$file=$_FILES["file"];

//sending the recieved file to the uploaded folder
move_uploaded_file($file["tmp_name"],"uploads/".$file["name"]);

header("Location: index.php");