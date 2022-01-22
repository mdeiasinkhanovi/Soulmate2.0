<?php

include_once('config.php');

session_start();

$sessionemail = $_SESSION['email'];

if(isset($sessionemail)){

$sql = "SELECT * FROM members WHERE email='$sessionemail'";

$result = mysqli_query($connect,$sql);
 
 while($row = mysqli_fetch_array($result)){
	 
    $id = $row['id'];
	 
	echo <<<_END
	
	<div class="navbar">

<a href="index"><div class="logo">

Soul Mate

</div>

</a>

<a class="new" href="search">

SEARCH

</a>

</div>


<div class="limit">

<a href="index">

<div class="menu"><i class="fa fa-home"></i>


Home

</div>



</a>

<a href="profile?id=$id">

<div class="menu" href="profile?id=$id"><i class="fa fa-user-circle"></i>


Profile

</div>

</a>

<a href="messages">

<div class="menu-message" href="messages"><i class="fa fa-envelope"></i>


Messages

</div>

</a>

<a href="friends">

<div class="menu" href="friends"><i class="fa fa-group"></i >

Friends

</div>

</a>

<a href="menu">

<div class="menu"><i class="fa fa-bars"></i>

Menu

</div>

</a>

    </div>


_END;

 }

} else {
	
	header('location:login');
	
}

?>