<?php

$file=$_FILES["file"];

//sending the recieved file to the uploaded folder
move_uploaded_file($file["tmp_name"],"EApplication/".$file["name"]);

header("Location: index.php");
?>