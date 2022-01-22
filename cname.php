<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>


<div class="title"><i class="fa fa-bookmark"></i> Update/Change Your Name</div>

<?php

if(isset($_POST['submit'])){
	
include_once('config.php');

$firstname = $_POST['firstname'];


$lastname = $_POST['lastname'];


$sql = "UPDATE members SET firstname='$firstname',lastname='$lastname' WHERE email='$sessionemail'";


mysqli_query($connect ,$sql);


echo <<<_END

<div class="success">Name Succesfully Updated</div>

_END;


}

?>

<?php

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	
	
	$firstname = $row['firstname'];
	
	$lastname = $row['lastname'];
	

echo <<<_END

<div class="login">

<form action="" method="post">

<b><i class="fa fa-quote-left"></i></i> First Name</b>

<center> <input name="firstname" class="cprofile-input" type="text" value="$firstname" placeholder="firstname" required> </center>

<br/>

<b><i class="fa fa-quote-right"></i></i> Last Name</b>

<center> <input name="lastname" class="cprofile-input" type="text" value="$lastname" placeholder="lastname" required> </center>
 

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