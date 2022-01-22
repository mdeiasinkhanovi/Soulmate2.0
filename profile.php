<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<?php

include_once('config.php');

$id = $_GET['id'];

if(isset($id)){	


$sql = "SELECT * FROM members WHERE id='$id'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	 
	$id = $row['id'];
	
	$profilepicture = $row['profilepicture'];
	
    $firstname = $row['firstname'];
	
    $lastname = $row['lastname'];
	
    $email = $row['email'];
	
	$day = $row['day'];
	
	$month = $row['month'];
	
	$year = $row['year'];
	
	$gender = $row['gender'];
	
	$work = $row['work'];
	
	$city = $row['city'];
	
	$country = $row['country'];
	
	$interested = $row['interested'];
	
	$languages = $row['languages'];
	
	$religious = $row['religious'];
	
	$relationship = $row['relationship'];
	
	$about = $row['about'];

	echo <<<_END
	
	<table class="profile" cellspacing="10px" cellpadding="0" width="100%">
	
	<td width="25%">
	
	<img class="profile-photo" src="$profilepicture" alt="Profile Photo">
	
	</td>
	
	<td width="75%">
	
	<h1><font color="green"><i class="fa fa-circle"></i></font> $firstname $lastname </h1>
	
	<i class="fa fa-briefcase"></i> <p>Works At $work</p>

	<br/>

	
	<i class="fa fa-map-marker"></i> <p>Lives In $city, $country</p>
	
	</td>
	
	</table>
	
	<div class="title"><i class="fa fa-vcard"></i> Personal Information </div>
	
	<div class="list"><i class="fa fa-envelope"></i> <b> Email : </b> $email</div>
	
	<div class="list"><i class="fa fa-venus-mars"></i> <b> Gender : </b> $gender </div>
	
	<div class="list"><i class="fa fa-birthday-cake"></i> <b> Birthday : </b> $day $month $year </div>
	
	<div class="list"><i class="fa fa-university"></i> <b> City : </b> $city </div>
	
	<div class="list"><i class="fa fa-globe"></i> <b> Country : </b> $country </div>
	
	<div class="list"><i class="fa fa-glass"></i> <b> Interested In : </b> $interested </div>
	
	<div class="list"><i class="fa fa-language"></i> <b> Languages : </b> $languages </div>
	
	<div class="list"><i class="fa fa-link"></i> <b> Religion : </b> $religious </div>
	
	<div class="title"><i class="fa fa-heart"></i> Relationship</div>
	
	<div class="list"><i class="fa fa-heartbeat"></i> $relationship </div>
	
	<div class="title"><i class="fa fa-info-circle"></i> About Me </div>
	<div class="list"><i class="fa fa-hashtag"></i> $about</div> 

_END;

include_once('footer.php');
 
}

}else{
	
	header('location:login.php');
}
 

?>