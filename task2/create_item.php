<?php
	include('conn.php');
	if(isset($_POST['add'])){
		$title=$_POST['title'];
		$text=$_POST['text'];
		$category=$_POST['category'];
		$image=rand(1,3);
		mysqli_query($conn,"insert into `items` (title, text, category,image) values ('$title', '$text', '$category', '$image')");
	}
?>


