<?php

include_once('header.php');

?>

<div class="navbar">

<a href="index"><div class="logo">

Soul Mate

</div>

</a>

<a class="new" href="registration">

SIGN UP NOW

</a>

</div>

<?php

include_once('config.php');

if(isset($_POST['submit'])){

session_start();

$email = htmlentities($_POST['email']);

$password = md5($_POST['password']);

$sql = " SELECT * FROM members WHERE email ='$email' && password ='$password'";

$result = $connect->query($sql);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['email'] = $email;
	
	header('location:index');
	
}else{
	
	echo <<<_END
	
	<div class="error"><i class="fa fa-remove"></i> Wrong Email Or Password</div>
	
_END;
	
}

}?>


<div class="login">

<form action="" method="post">

<b><i class="fa fa-envelope-o"></i> Email Address</b>

<input name="email" type="text" class="login-input" placeholder="Email Address" required>

<b><i class="fa fa-key"></i> Password</b>

<input  name="password" type="password" class="login-input" placeholder="Password" required>


<input name="submit" class="submit" type="submit" Value="SIGN IN"> 

</form>

</div>

<?php

include_once('footer.php');

?>