<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<?php

if(isset($sessionemail)){	

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
	$city = $row['city'];
	
	$country = $row['country'];
	
	$interested = $row['interested'];
	
	$languages = $row['languages'];
	
	$religious = $row['religious'];
	
	$relationship = $row['relationship'];
	
	$about = $row['about'];

if(empty($about && $city && $country && $religious && $relationship && $interested)){
	
echo <<<_END

<div class="error">

Your Profile is 30% Complete(<a href="cprofile">Edit Profile</a>)

</div>
	
_END;
}

 }

}

?>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$firstname = $_POST['firstname'];

$lastname = $_POST['lastname'];

$messages  = htmlentities($_POST['messages']);

$sqlmessages = "INSERT INTO group_messages(firstname,lastname,messages)VALUES('$firstname','$lastname','$messages')";


mysqli_query($connect ,$sqlmessages);

header('location:index');

}

?>

<?php

include_once('config.php');


$sql = "SELECT * FROM members WHERE email ='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	 
	$id = $row['id'];
	
	$firstname = $row['firstname'];
	
	$lastname = $row['lastname'];
	
	$profilepicture = $row['profilepicture'];
	
	echo <<<_END

	
	<div class="login">
	
	<form action="" method="post"> 
	
	<input type="text" name="firstname" value="$firstname" hidden>
	
	<input type="text" name="lastname" value="$lastname" hidden>
	
	<table width="100%" cellpadding="5px">
	
	<td width="5%">
	
	<a href="profile?id=$id"><img src="$profilepicture" alt="Profile Photo" class="group-chat-profile"></a>
	
	</td>
	
	<td width="80%">
	
<textarea name="messages" placeholder="Write Your Messages Here....." class="group-chat-messages-input" required></textarea>

</td>

<td width="15%">

<input name="submit" class="group-chat-submit" type="submit" value="SEND">

</td>
	
	</table>
	
</form>

</div>

_END;

 }

?>

<div class="title"><i class="fa fa-envelope"></i> Group Chat</div>

<?php

include_once('config.php');

$messagesperpage = 10;

if(isset($_GET['page']) && !empty($_GET['page'])){
	
$currentpage = $_GET['page'];

}else{
	
$currentpage = 1;

}

$start = ($currentpage * $messagesperpage) - $messagesperpage;

$sql = "SELECT * FROM group_messages";

$almessages = mysqli_query($connect, $sql);

$totalmessages = mysqli_num_rows($almessages);

$lastpage = ceil($totalmessages/$messagesperpage);

$firstPage = 1;

$nextpage = $currentpage + 1;

$previouspage = $currentpage - 1;

$sql1 = "SELECT * FROM group_messages ORDER BY messageid DESC  LIMIT $start, $messagesperpage";

$result = mysqli_query($connect, $sql1);


?>

<?php

while($row = mysqli_fetch_array($result))
	 
 {

	 $firstname = $row['firstname'];
	 
	 $lastname = $row['lastname'];
	 
	 $messages = $row['messages'];
	 
	 $date = $row['date'];
	 
	 echo <<<_END
	 
	
	<div class="group-chat-messages">
	
	<a href="#"><b>$firstname $lastname</b></a>
	
	<p>$messages</p>
	
	</div>
	
	
	
	
_END;
 
 }

?>

<?php


if($nextpage<=$lastpage){
	
	echo "<a href='?page=" . $nextpage . "'><div class='group-chat-button'>Recent Messages</div></a>";
	
}else{
	
	echo "<a href='index'><div class='group-chat-button'>Newer Messages</div></a>";
}


 ?>
 

<?php

include_once('footer.php');

?>