<?php
    $con = mysqli_connect('127.0.0.1','root','');

    mysqli_select_db($con,'user');

    $sql = "DELETE FROM users WHERE id='$_GET[ID]'";

    if(mysqli_query($con,$sql))
    	header("refresh:1; url=index1.php");
    else
    	echo "Not Deleted";	   
?>