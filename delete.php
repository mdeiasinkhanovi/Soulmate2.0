<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<div class="title"><i class="fa fa-trash"></i> Delete Your Account</div>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$password = md5($_POST['password']);

$sql = " select * from members where email ='$sessionemail' && password ='$password'";

$result = mysqli_query($connect,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
	
$deletesql = "DELETE FROM members WHERE email='$sessionemail' && password='$password'";

mysqli_query($connect,$deletesql);


	
header('location:logout');


}else{
	
	echo <<<_END

<div class="error">You Have Entered A Wrong Password</div>

_END;

}

}

?>

<?php

echo <<<_END


<div class="login">


<form action="" method="post">

<b><i class="fa fa-key"></i> Your Password</b>

<input name="password" class="cprofile-input" type="password" placeholder="Your Password" required>

<input name="submit" class="cprofile-submit" type="submit" value="Edit">

</form>

</div>

_END;



?>

</div>

<?php

include_once('footer.php');

?>