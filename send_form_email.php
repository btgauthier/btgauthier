<?php
 
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "timsjazz@btgauthier.com";
 
    $email_subject = "Performance Request";
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
    $quote = $_POST['quote']; // not required
    
    $solo = $_POST['solo']; // not required
    
    $duo = $_POST['duo']; // not required
    
    $trio = $_POST['trio']; // not required
    
    $largerGroup = $_POST['largerGroup']; // not required
    
    $hiResPic = $_POST['hiResPic']; // not required
    
    $bio = $_POST['bio']; // not required
    
    $first_name = $_POST['first_name']; // required
 
  //  $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
 // if(!preg_match($string_exp,$last_name)) {
 
  //  $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
 // }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
    $email_message .= "Quote: ".clean_string($quote)."\n";

	$email_message .= "Solo: ".clean_string($solo)."\n";
	
	$email_message .= "Duo: ".clean_string($duo)."\n";
	
	$email_message .= "Trio: ".clean_string($trio)."\n";
	
	$email_message .= "Larger Group: ".clean_string($largerGroup)."\n";
	
	$email_message .= "Hi Res Pic: ".clean_string($hiResPic)."\n";
	
	$email_message .= "Bio: ".clean_string($bio)."\n";
	
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
header('Location: thankYou.html');
 
?>
 
 
 
<!-- include your own success html here -->
 
send_form_email.php
 
Thank you for contacting us. We will be in touch with you very soon. Please hit the back arrow to return to jazz page.
 
 
 
<?php
 
}
 
?>