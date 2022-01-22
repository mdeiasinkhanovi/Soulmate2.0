<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<div class="title"><i class="fa fa-envelope"></i> Update/Change Your Email</div>

<div class="error">

<i class="fa fa-asterisk"></i> After Changing Email Address, You Will Be Logged Out Then Login With Your New Email Addresss.

</div>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$email = $_POST['email'];

$sql = " select * from members where email ='$email'";

$result = mysqli_query($connect,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
	
	echo <<<_END

<div class="error">This Email Address Is Already In Used</div>

_END;

}else{


$sql = "UPDATE members SET email='$email' WHERE email='$sessionemail'";


mysqli_query($connect ,$sql);


header('location:logout');


}

}

?>

<?php

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
	
	$email = $row['email'];
	

echo <<<_END

<div class="login">

<form action="" method="post">

<b><i class="fa fa-envelope-o"></i> Email Address</b>

<center> <input name="email" class="cprofile-input" type="text" value="$email" placeholder="email" required> </center>

<center> <input name="submit" class="cprofile-submit" type="submit" value="Change">  </center>

</form>

</div>

_END;

 }

?>

</div>

<?php

include_once('footer.php');

?>