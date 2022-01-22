<?php

include_once('header.php');

?>


<div class="navbar">

<a href="index"><div class="logo">

Soul Mate

</div>

</a>

<a class="new" href="login">

SIGN IN NOW

</a>

</div>


<?php

include_once('config.php');

if(isset($_POST['submit'])){

$profilepicture = "profilepicture/" . htmlentities($_POST['gender']) . ".jpg";

$firstname =  htmlentities($_POST['firstname']);

$lastname = htmlentities($_POST['lastname']);

$email = htmlentities($_POST['email']);

$password = md5($_POST['password']);

$day = htmlentities($_POST['day']);

$month = htmlentities($_POST['month']);

$year = htmlentities($_POST['year']);

$gender = htmlentities($_POST['gender']);

$sql = "INSERT INTO members (profilepicture, firstname, lastname, email, password, day, month, year, gender)VALUES ('$profilepicture', '$firstname', '$lastname', '$email', '$password', '$day', '$month', '$year', '$gender')";


if($connect->query($sql) ===TRUE){

echo <<<_END

<div class="success"><i class="fa fa-check" aria-hidden="true"></i> Sign Up Successfully, Login Now And Enjoy.</div>

_END;


}else{
    
echo <<<_END

<div class="error"><i class="fa fa-check" aria-hidden="true"></i> This Email Address Is Already In Used Or Something Wrong.</div>

_END;

}

}

?>

<div class="login">



<form action="" method="post">

<b><i class="fa fa-quote-left"></i></i> First Name</b>

<input name="firstname" class="login-input" type="text" placeholder="First Name" required>

<b><i class="fa fa-quote-right"></i></i> Last Name</b>

<input name="lastname" class="login-input" type="text" placeholder="Last Name" required>

<b><i class="fa fa-envelope-o"></i> Email Address</b>

<input name="email" class="login-input" type="email" placeholder="Email Address" required>

<b><i class="fa fa-key"></i> Password</b>

<input name="password" class="login-input" type="password" placeholder="Password" required>

<b><i class="fa fa-birthday-cake"></i> Birthday</b>

<table width="100%">

<tr>

<td width="33%">

<select name="day" class="login-input-select" required>

<option selected>Day</option>

 <option  value="01">01</option>
 
 <option value="02">02</option>
 
 <option value="03">03</option>
 
 <option value="04">04</option>
 
 <option value="05">05</option>
 
 <option value="06">06</option>
 
 <option value="07">07</option>
 
 <option value="08">08</option>
 
 <option value="09">09</option>
 
 <option value="10">10</option>
 
 <option value="11">11</option>
 
 <option value="12">12</option>
 
 <option value="13">13</option>
 
 <option value="14">14</option>
 
 <option value="15">15</option>
 
 <option value="16">16</option>
 
 <option value="17">17</option>
 
 <option value="18">18</option>
 
 <option value="19">19</option>
 
 <option value="20">20</option>
 
 <option value="21">21</option>
 
 <option value="22">22</option>
 
 <option value="23">23</option>
 
 <option value="24">24</option>
 
 <option value="25">25</option>
 
 <option value="26">26</option>
 
 <option value="27">27</option>
 
 <option value="28">28</option>
 
 <option value="29">29</option>
 
 <option value="30">30</option>
 
 <option value="3">31</option>
 
</select>

</td>

<td width="34%"
>
<select name="month" class="login-input-select" required>
    
<option selected>Month</option>

 <option value="January">January</option>
 
 <option value="February">February</option>
 
 <option value="March">March</option>
 
 <option value="April">April</option>
 
 <option value="May">May</option>
 
 <option value="June">June</option>
 
 <option value="July">July</option>
 
 <option value="August">August</option>
 
 <option value="September">September</option>
 
 <option value="October">October</option>
 
 <option value="November">November</option>
 
 <option value="December">December</option>
 
</select>

</td>

<td width="33%">

<select name="year" class="login-input-select" required>

<option selected>Year</option>

 <option value="1900">1990</option>
 
 <option value="1991">1991</option>
 
 <option value="1992">1992</option>
 
 <option value="1993">1993</option>
 
 <option value="1994">1994</option>
 
 <option value="1995">1995</option>
 
 <option value="1996">1996</option>
 
 <option value="1997">1997</option>
 
 <option value="1998">1998</option>
 
 <option value="1999">1999</option>
 
 <option value="2000">2000</option>
 
 <option value="2001">2001</option>
 
 <option value="2002">2002</option>
 
 <option value="2003">2003</option>
 
 <option value="2004">2004</option>
 
 <option value="2005">2005</option>
 
 <option value="2006">2006</option>
 
 <option value="2007">2007</option>
 
 <option value="2008">2008</option>
 
 <option value="2009">2009</option>
 
 <option value="2010">2010</option>
 
 <option value="2011">2011</option>
 
 <option value="2012">2012</option>
 
 <option value="2013">2013</option>
 
 <option value="2014">2014</option>
 
 <option value="2015">2015</option>
 
 <option value="2016">2016</option>
 
 <option value="2017">2017</option>
 
 <option value="2018">2018</option>
 
 <option value="2019">2019</option>
 
 <option value="2020">2020</option>

 <option value="2020">2021</option>
 
</select>

</td>

</tr>

</table>


<b><i class="fa fa-venus-mars"></i> Gender</b>

<select name="gender" class="login-input-select" required>
    
<option selected>Gender</option>

 <option value="Male">Male</option>
 
 <option value="Female">Female</option>
 
</select>

<input name="submit" class="submit" type="submit" value="Sign Up"> 

</form>

</div>

<?php

include_once('footer.php');

?>