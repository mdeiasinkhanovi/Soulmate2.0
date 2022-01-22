<?php

include_once('header.php');

?>

<?php

include_once('meta_header.php');

?>

<div class="title"><i class="fa fa-bullhorn"></i> Help</div>

<?php

if(isset($_POST['submit'])){
 $to = "admin@soulmate.com";
 
 $subject = $_POST['subject'];
 
 $message = $_POST['message'];
 
 $from = $sessionemail;
 
 $headers = "From:" . $from;
 
 mail($to,$subject,$message,$headers);
 
 echo <<<_END

 <div class="success">Help Sent To Us,We Will Contact With You As Soon As Possible</div>
 
_END;

}

?>
 
 <div class="login">
 
 <form action="" method="post">
 
 <b><i class="fa fa-address-book-o"></i></i> Subject</b>
 
 <input class="help-input" name="subject" type="text" placeholder="Subject" required>

 
 <b><i class="fa fa-commenting-o"></i></i> Messages</b>
 
<textarea class="help-text-input" name="message" placeholder="Write Your Messages Here....." required></textarea>
  
<input name="submit" class="help-submit" type="submit" value="Send">

</div> 
   

<?php

include_once('footer.php');

?>