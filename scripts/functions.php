<?php
//Error Handling:
include('phpErrorDirection.php');

//##################################################################################################################################
//This iteration outputs errors without the need for exit statements:
//##################################################################################################################################

$cform = "<form action=\"\" method=\"post\">
<fieldset>
<div class=\"field required\">
	<label for=\"name\">Your Name</label>
	<input type=\"text\" name=\"name\" id=\"name\" class=\"text verifyText\" title=\"*first last\" />
	<span class=\"iferror\">Field required!</span>
</div><!-- E_field -->

<div class=\"field required\">
<label for=\"email\">Your Email</label>
<input type=\"text\" id=\"email\" name=\"email\" class=\"text verifyMail\" title=\"*example@email.com\" />
<span class=\"iferror\">Not a valid email address!</span>
</div><!-- E_field -->

<div class=\"field required\">
<label for=\"site\">Your Site</label>
<input type=\"text\" id=\"site\" name=\"site\" class=\"text verifyURL\" title=\"*www.example.com\" />
<span class=\"iferror\">Not a valid web address!</span>
</div><!-- E_field -->

<input type='text' name='contact_empty' value='' class='hide' />

<label for=\"description\">Work Needed</label>
<textarea name=\"description\" id=\"description\" cols=\"10\" rows=\"10\">
</textarea>

<input class=\"button\" type=\"submit\" value=\"Submit\" name=\"submit\" />
</fieldset>
</form>";

$error = false;
$email = false;
$jquery = false;
$other = false;

function emailCheck($email) {
    if(preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', $email)) {
        return true;
    } else {
        return false;
    } //End if()
} //End emailCheck()

	$name=$_POST['name'];
  	$email=$_POST['email'];
  	$site=$_POST['site'];
  	$contact_empty = $_POST['contact_empty'];
  	$desc=$_POST['description'];
  	$err=$_POST['errorDisplay'];
	echo $err;
	$to = 'josh@codeitcreations.com';
	$subject = "$name's message via codeitcreations.com";
	$message =
	"Viewer's Email: $email.
The message was: $desc";
   $headers = 'From: viewer@codeitcreations.com';

if(($_POST['submit']) && ($_POST['submit'] == 'Submit')) {
    if ( (!empty($name)) && (!empty($email)) && (!empty($site)) && (!empty($desc)) ) {
       if(emailCheck($email)) {
       		if($contact_empty == '') {
        		$sent = mail($to, $subject, $message, $headers);
    		} else {
    			$other = true;
			}
       } else { $mail = true;
          }
    } else { $error = true;
     } //End if()

    if($sent) {
    echo '<p class="success">Mail sent successfully!</p>';
    } elseif($mail) {
		echo '<p class="errorWrap">Bad Email, please type a valid email</p>';
		$jquery = true;	
	} elseif($error) {
		echo '<p class="errorWrap">Please fill out all of the fields!</p>';
		$jquery = true;	
	} elseif($other) {
		echo "<p class='errorWrap'>Something went wrong. Email the webmaster and let him know:  <a href='mailto:josh@codeitcreations.com'> webmaster</a></p>";	
		$other = true;
	} else {
    echo '<p class="errorWrap">Sorry, your mail did not send, send an
    email to the <a href="mailto:josh@codeitcreations.com">webmaster</a></p>';   
    	$jquery = true;	 
    } //End if()
    
} //End if()

if($jquery || $other) { ?>
  	  <script type="text/javascript">
	    $(document).ready(function(){
	    	$("p.theError").css("display", "block");
			$("p.theError").text("You have an error with your submission ");
			$("p.theError").append('<a href="#contact"> view </a>');
	    }); 
    </script>
    <?php }

echo $cform;
?>