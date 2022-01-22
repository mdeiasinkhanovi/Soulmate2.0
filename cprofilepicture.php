<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>


<div class="title"><i class="fa fa-camera"></i> Update/Change Profile Picture</div>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$folder = 'profilepicture/';
  
$filename = $_FILES['file']['name'];
  
$profilepicture = $folder . $filename;
  
move_uploaded_file($_FILES['file']['tmp_name'], $folder.$filename);

$sql = "UPDATE members SET profilepicture='$profilepicture' WHERE email='$sessionemail'";



mysqli_query($connect ,$sql);

echo <<<_END

<div class="success">Profile Picture Succesfully Updated</div>

_END;

}

?>

<?php

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
	$profilepicture = $row['profilepicture'];

echo <<<_END

<div class="login">

<form action="" method="post" enctype="multipart/form-data">

<b><i class="fa fa-camera-retro"></i> Profile Picture</b>

<br/>

<center>

<img src="$profilepicture" class="cprofile-photo" alt="Profile Photo">

</center>

<input type="file" class="cprofile-upload" name="file" required id="file"/>


<input name="submit" class="cprofile-upload-submit" type="submit" value="Upload">

</form>

</div>

_END;

 }

?>


<?php

include_once('footer.php');

?>