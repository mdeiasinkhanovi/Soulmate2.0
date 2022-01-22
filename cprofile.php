<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>


<div class="title"><i class="fa fa-user-circle"></i> Update/Change Your Profile</div>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$work = htmlentities($_POST['work']);

$city = htmlentities($_POST['city']);

$country = htmlentities($_POST['country']);

$interested  = htmlentities($_POST['interested']);

$languages  = htmlentities($_POST['languages']);

$religious  = htmlentities($_POST['religious']);

$relationship = htmlentities($_POST['relationship']);

$about = htmlentities($_POST['about']);

$sql = "UPDATE members SET work='$work' , city='$city' ,country='$country' ,interested='$interested' ,languages='$languages' ,religious='$religious' ,relationship='$relationship',about='$about' WHERE email='$sessionemail'";


mysqli_query($connect ,$sql);


echo <<<_END

<div class="success">Profile Succesfully Updated</div>

_END;


}

?>

<?php

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
	$work = $row['work'];
	
	$city = $row['city'];
	
	$country = $row['country'];
	
	$interested = $row['interested'];
	
	$languages = $row['languages'];
	
	$religious = $row['religious'];
	
	$relationship = $row['relationship'];
	
	$about = $row['about'];
	

echo <<<_END

<div class="login">

<form action="" method="post">

<b><i class="fa fa-briefcase"></i> Work At</b>

<br/>

<center> <input name="work" class="cprofile-input" type="text" value="$work" placeholder="Work"> </center>

<br/>

<b><i class="fa fa-university"></i> City</b>

<br/>

<center> <input name="city" type="text" class="cprofile-input" value="$city" placeholder="City"> </center>

<br/>

<b><i class="fa fa-globe"></i> Country</b>

<br/>

<center> <input name="country" type="text" class="cprofile-input" value="$country" placeholder="Country"> </center>
 
<br/>

<b><i class="fa fa-language"></i> Languages</b>

<br/>

<center> <input name="languages" type="text" class="cprofile-input" value="$languages" placeholder="Languages"> </center>

<br/>

<b><i class="fa fa-link"></i> Religion</b>

<br/>

<center> <input name="religious" type="text" class="cprofile-input" value="$religious" placeholder="Religious"> </center>

<br/>

<b><i class="fa fa-info-circle"></i> About Me</b>

<br/>

<center> <textarea name="about" class="cprofile-input">$about</textarea></center>

<br/>

<b><i class="fa fa-glass"></i> Interested In</b>

<br/>

<center>

<select name="interested" class="cprofile-input" required>

<option value="$interested" selected>$interested</option>

<option value="Men">Men</option>
 
<option value="Women">Women</option>
 
<option value="Men & Women">Men & Women</option>
 
<option value="Others">Others</option>

</select>

</center>

<br/>

<b><i class="fa fa-heart"></i> Relationship Status</b>

<br/>

<center>

<select name="relationship" class="cprofile-input" required>

<option value="$relationship" selected>$relationship</option>

<option value="Single">Single</option>
 
<option value="In A Relationship">In A Relationship</option>
 
<option value="Married">Married</option>
 
<option value="Others">Others</option>

</select>

</center>

<center> <input name="submit" class="cprofile-submit" type="submit" value="Update">  </center>

</form>

</div>

_END;

 }

?>

</div>

<?php

include_once('footer.php');

?>