<?php
$conn = mysqli_connect("localhost","root","","test" );

if(!$conn)
{
die('cannot connect to the database:'.mysqli_error($conn));
}

$sql = "select * from category where c_id = '$_POST[.$id]'";
$result = mysqli_query($conn, $sql);

$_SESSION['c_id'] = $_POST[.$id];

$name = mysqli_fetch_array($result);

if(! mysqli_num_rows($result))
{
	if(! $name = mysqli_fetch_array($result))
	{
		//echo "<script type='text/javascript'>alert('enter valid id!!!')</script>";
		//header("Location: ");
		//die();
		
		echo "<script>alert('enter valid id please!!!');
		window.location.href='';</script>";
	}
}

mysqli_close($conn);
?>