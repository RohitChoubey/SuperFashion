<?php
	session_start();

	//$errors = array(); 

	// connect to the database
	require ("dbconfig.php");
	
	// File upload path
	$targetDir = "uploads/";

// initializing variables
	$category = "";
	$image ="";
  // receive all input values from the form
  
	$fileName = basename($_FILES["image"]["name"]); 
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	$category = mysqli_real_escape_string($db, $_POST['category']);
	
	if (empty($category)) { 
		array_push($errors, "Category Name is required"); 
	}
    $allowTypes = array('jpg','png','jpeg','gif','pdf','.JPG');
	//if(in_array($fileType, $allowTypes)){
		  // Upload file to server
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
	
		/* $image = $_FILES['image']['tmp_name']; 
		$imgContent = addslashes(file_get_contents($image)); */
		
		//$query = "insert into product(category, img,time)values('$category', '".$fileName."',NOW())";
		 $insert = $db->query("insert into product (category, img, time) VALUES ('$category','$fileName', NOW())");
		//mysqli_query($con,$query);
		if($insert){
			$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
			header("Location: AddProduct.php"); 
		}else{
			$statusMsg = "File upload failed, please try again.";
			} 
		}else{
			$statusMsg = "Sorry, there was an error uploading your file.";
		}
	/* }
	else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    } */
	// Display status message
echo $statusMsg;
	/* $_SESSION['success'] = "Your Product is Added Sucessfully"; 
	header("Location: AddProduct.php"); 
    echo "insert sucessfully"; */

?>