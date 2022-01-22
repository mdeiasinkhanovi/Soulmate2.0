<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<div class="title"><i class="fa fa-lock"></i> Update/Change Your password</div>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$oldpassword = md5($_POST['oldpassword']);

$newpassword = md5($_POST['newpassword']);

$sql = " select * from members where email ='$sessionemail' && password ='$oldpassword'";

$result = mysqli_query($connect,$sql);

$num = mysqli_num_rows($result);

if($num == 1){

$sqlupdate = "UPDATE members SET password='$newpassword' WHERE email='$sessionemail'";


mysqli_query($connect ,$sqlupdate);

echo <<<_END

<div class="success">Password Succesfully Updated</div>

_END;

}else{
	
	echo <<<_END

<div class="error">Your Old Password Is Wrong</div>

_END;
	
}

}

?>

<div class="login">

<form action="" method="post">

<b><i class="fa fa-key"></i> Old Password</b>


<input name="oldpassword" class="cprofile-input" type="password" placeholder="Old Password" required>

<b><i class="fa fa-key"></i> New Password</b>

<input name="newpassword" class="cprofile-input" type="text" placeholder="New Password" required>

<input name="submit" class="cprofile-submit" type="submit" value="Change">

</form>

</div>

<?php

include_once('footer.php');

?>