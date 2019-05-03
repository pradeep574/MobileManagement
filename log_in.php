<?php
	$u=$_GET['usr'];
	$p=$_GET['pwd'];
	require 'vendor/autoload.php';
	/*To delete a document from a collection*/
	$mclient = new MongoDB\Client;
	$msdb = $mclient->mobstore;
	$admincollection = $msdb->admin;
	$valid1 = $admincollection->findOne(['usr' => $u]);
	$valid2 = $admincollection->findOne(['pwd' => $p]);
	if($valid1&&$valid2)
		{echo '<script type="text/javascript">'; 
    echo 'window.location.href = "main.php";';
	echo '</script>';
		}
	else
	{
	  echo '<script type="text/javascript">'; 
	  echo 'alert("Could not Login!");'; 
	  echo 'window.location = "index.php";';
	  echo '</script>';

	}
	
?>