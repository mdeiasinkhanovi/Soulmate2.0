<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<div class="title"><i class="fa fa-exclamation-triangle"></i> Report Problems</a></div>

<?php

if(isset($_POST['submit'])){
 $to = "admin@soulmate.com";
 
 $subject = $_POST['subject'];
 
 $message = $_POST['message'];
 
 $from = $sessionemail;
 
 $headers = "From:" . $from;
 
 mail($to,$subject,$message,$headers);
 
 echo <<<_END

 <div class="success">Report Sent To Us,We Will Contact With You As Soon As Possible</div>
 
_END;

}

?>
 
 <div class="login">
 
 <form action="" method="post">
 
 <b><i class="fa fa-address-book-o"></i></i> Subject</b>
 
 <br/>
 
 <input name="subject" class="help-input"  type="text" placeholder="Subject">
 
 <br/>
 
 <b><i class="fa fa-commenting-o"></i></i> Describe Your Problem</b>
 
 <br/>
 
<textarea name="message" class="help-text-input" placeholder="Write Your Problem Here....." required></textarea>

<br/>

<br/>
  
<input name="submit" class="help-submit" type="submit" value="Send">

</div> 
   

<?php

include_once('footer.php');

?>