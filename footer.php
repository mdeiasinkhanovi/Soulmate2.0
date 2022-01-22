<?php

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

echo <<<_END

<table class="footer-menu" width="100%">

<tr>

<td width="50%">

<a href="help"><i class="fa fa-bullhorn"></i> Help</a>

<br/>


<a href="setting"><i class="fa fa-gear"></i> Settings


_END;

echo <<<_END

</a>

<br/>

<a href="http://www.facebook.com/mdeiasinkhanovi"><i class="fa fa-facebook-square"></i> Contact Me</a>

</td>

<td width="50%">


<a href="report"><i class="fa fa-exclamation-triangle"></i> Report Problem</a>

<br/>

<a href="toc"><i class="fa fa-shield"></i> Terms & Condition</a>

<br/>

<a href="logout"><i class="fa fa-sign-out"></i> Log Out ($firstname $lastname)</a>

</td>

</table>


_END;
 }
 
}

?>

<div class="footer">

<?php echo "Copyright &copy; 2010-" . date('Y'). "&trade;"; ?>

</div>

</div>

</body>