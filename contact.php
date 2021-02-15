<?php
if (isset($_POST['send'])) 
{
	$UserName=$_POST['name'];
	$Email=$_POST['email'];
	$Subject=$_POST['subject'];
	$Msg=$_POST['message'];

	if (empty($UserName) || empty($Email) || empty($Subject) || empty($Msg) ) 
	{
		header('location:index.php?error');
	}
	else
	{
		$to="twigamabati@yahoo.com";

		if (mail($to, $Subject, $Email, $Msg))
		 {
			header("location:index.php?success");
		}
	}
}
else
{
	header("location:index.php");
}
?>