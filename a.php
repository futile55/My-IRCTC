<?php
if(isset($_POST['email'])) {
    
    //Email
    $email_to = "email@email.com";
    $email_subject = "CG Contact Form Submission";
    
    function died($error) {
        // error message code 
        echo "We are very sorry, but there were error(s) found with the form your submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error."<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }
    
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form your submitted.');        
    }
    
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
    
    $error_message = "";
    $email_exp = "^[A-Z0-9._%-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}$";
  if(!eregi($email_exp,$email_from)) {
      $error_message .= 'The Email Address you entered does not appear to be valid.<br>';
  }
    $string_exp = "^[a-z .'-]+$";
  if(!eregi($string_exp,$name)) {
      $error_message .= 'The Name you entered does not appear to be valid.<br>';
  }
  
  if(strlen($comments) < 2) {
      $error_message .= 'The Comments you entered do not appear to be valid.<br>';
  }
  $string_exp = "^[0-9 .-]+$";
  if(!eregi($string_exp,$telephone)) {
      $error_message .= 'The Telphone Number you entered does not appear to be valid.<br>';
  }
  if(strlen($error_message) > 0) {
      died($error_message);
  }
    $email_message = "Form details below.\\";
    
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    
    $email_message .= "Name: ".clean_string($name)."\
";
    $email_message .= "Email: ".clean_string($email_from)."\
";
    $email_message .= "Telephone: ".clean_string($telephone)."\
";
    $email_message .= "Comments: ".clean_string($comments)."\
";
    
    
// create email headers
$headers = 'From: '.$email_from."\\r\
".
'Reply-To: '.$email_from."\\r\
" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
<html>
<table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr> 
          <td valign="top" height="10"> 
            <p><font face="arial,verdana" size="3" class="page_title"><b><img src="headers/quote.gif" width="410" height="17" alt=""></b></font> 
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
              <tr> 
                <td valign="top"> 
                  <hr noshade size="1">
                  <font face="Verdana, Arial, Helvetica, sans-serif" size="1">Thanks 
                  for visiting our website! We would love to hear from you. </font>               
                </td>
                
              </tr>
            </table>
			</td></tr></table>
	</html>