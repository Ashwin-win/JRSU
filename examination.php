<?php
error_reporting(0);//error reporting function(php inbuilt function) is use to stop showing of warning errors;
?>
<html>
	<body bgcolor="white">
		<center>
		<h1>EXAMINATION DEPARTMENT </h1>
		<form action="" method="POST" enctype="multipart/form-data">
			<input type="file" name="uploadfile">
			<input type="submit" value="Upload" name="submit">
		</form>
		</center>
	</body>
</html>

<?php

$filename=$_FILES["uploadfile"]["name"];//here name of the selected file is stored in filename variable;
$tempname=$_FILES["uploadfile"]["tmp_name"];//tmp_name is temporary name of the selected image;
//$_FILES["uploadfile"];
$folder="uploadedfile/".$filename; //folder variable stores the folder name where image will be uploaded;
move_uploaded_file($tempname,$folder);//move_upload_file is a function to upload the selected image;
echo $folder;
?>