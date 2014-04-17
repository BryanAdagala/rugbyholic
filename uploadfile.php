<?php
	//define the constant for maximum upload size
	define('MAX_FILE_SIZE', 1024*50);
	
	if(array_key_exists('upload', $_POST)){
	//define constant for upload folder
	define('uploads', '/C:/uploads/');
	//replace any spaces in the original file name with underscores
	$file=str_replace('', '_', $_FILES['image']['name']);
	//create an array of MIME types
	$permitted=array('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png');
	
	//upload if file is ok
	if(in_array($_FILES['image']['type'], $permitted)
		&& $_FILES['image']['size']>0
		&& $_FILES['image']['size'] <= MAX_FILE_SIZE){
		switch($_FILES['image']['error']){
			case 0:
			//check if a file of the same name has been uploaded
			if(!file_exists(uploads .$file)){
			//move the file to the uploads folder and rename it
			$success=(move_uploaded_file($_FILES['image']['tmp_name'], 'uploads'. $file));
		}else{
			$result='A file of the same name already exists';
		}
		if ($success){
			$result='$file uploaded successfully';
		}else{
			$result='Error uploading $file. Please try again';
		}
		break;
		case 3:
		case 7:
		case 8:
			$result='Error uploading $file. Please try again';
			break;
		case 4:
			$result='You did not select a file for upload';
		}
	}else{
		$result='The file is too big or not an image.';
	}
	}
	include 'purchaseitems.php';
?>