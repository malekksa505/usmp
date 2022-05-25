<?php 
	include 'connection.php';


	$membership = $_POST['membership'];
	$name = $_POST['name'];
	$address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $contact = $_POST['contact'];






    $sql = "INSERT INTO `student` ( `name`, `address1`, `address2`,contact, `typee`) VALUES ( '$name', '$address1', '$address2','$contact', '$membership')";
    $con->exec($sql);
 ?>

 <script type="text/javascript">
 	setTimeout(function(){
 		window.location.href = 'register.php';
 	},1500)
 </script>

 <br>
 <br>
 <br>
 <br>
 <br>
 <center>
 	<h3>معلوماتك تم ارسالها!</h3>
 </center>