<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<?php
 
include_once('config.php');
 
$sql = "SELECT * FROM members";
 
$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result))
	 
 {
	 $id = $row['id'];
	 $profilepicture = $row['profilepicture'];
	 $firstname = $row['firstname'];
	 $lastname = $row['lastname'];
	 
	 echo <<<_END
	 
	<table class="friends" cellspacing="10px" cellpadding="0" width="100%">
	
	<td width="15%">

	<a href="profile?id=$id">
	
	<img class="friends-profile" src="$profilepicture" alt="Profile Photo">

	</a>

	</td>
	
	<td width="85%">

	<a href="profile?id=$id">
	
	$firstname $lastname

	</a>
	
	<br/>
	
	<button class="friends-button">Send Request</button>
	
	<button class="friends-button">Message</button>
	
	</td>
	
	</table>
	
	
	
_END;
 
 }
 ?>
 
 <?php
 
 include_once('footer.php');
 
 ?>