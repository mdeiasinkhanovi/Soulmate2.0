<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<div class="title"><i class="fa fa-gear"></i> Settings</div>

<a href="cprofile"> <div class="setting"><i class="fa fa-user-circle"></i> Change Profile <?php

if(isset($sessionemail)){	

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
    $firstname = $row['firstname'];
	
    $lastname = $row['lastname'];
	
	$city = $row['city'];
	
	$country = $row['country'];
	
	$interested = $row['interested'];
	
	$languages = $row['languages'];
	
	$religious = $row['religious'];
	
	$relationship = $row['relationship'];
	
	$about = $row['about'];

if(empty($about && $city && $country && $religious && $relationship && $interested)){
	
echo <<<_END
	
	<i class="fa fa-asterisk"></i>
	
_END;
}

}
 
}

?></div> </a>

<a href="cprofilepicture"> <div class="setting"><i class="fa fa-camera"></i> Change Profile Picture</div> </a>

<a href="cname"> <div class="setting"><i class="fa fa-bookmark"></i> Change Name</div> </a>

<a href="cemail"> <div class="setting"><i class="fa fa-envelope"></i> Change Email</div> </a>


<a href="cpassword"> <div class="setting"><i class="fa fa-lock"></i> Change Password</div> </a>

<a href="delete"> <div class="setting"><i class="fa fa-trash"></i> Delete Account</div> </a>

<?php

include_once('footer.php');

?>