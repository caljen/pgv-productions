<?php

function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
  else
    {
	 // To send the HTML mail we need to set the Content-type header.
   $headers = "MIME-Version: 1.0";
   $headers = "Content-type: text/html; charset=iso-8859-1";
   $headers  .= "From: $email\n";
    //options to send to cc+bcc
   $headers .= "Cc: calwayne101@yahoo.com\n";
   $headers .= "Bcc: calwayne101@yahoo.com\n";   
	    
	    //send email
    $email = $_REQUEST['email'] ;
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    /*
     $message = "
	<html>

<body bgcolor='#FFFFFF' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0'>
<table align='center'>
<tr>
<td>
<a href='http://pgvproductions.com/PGVServices/72/invite/Holiday_Party_Site_113011.html'>
<img src='http://pgvproductions.com/PGVServices/72/email/images/Holiday_Party_Invite_113011b.gif' width='600' height='800' border='0'  title='Invite' alt='Click Invite to RSVP'></a>
</a>
</td>
</tr>
</table>
</body>
</html>
      ";
    */
    mail("support@pgvproductions.com", "Subject: $subject",
    $message, $headers );
    echo "Thank you for emailing us";
    }
  }
else
  {//if "email" is not filled out, display the form
 
  echo "<form method='post' action='../page/contact.php'>
  Your Email <input name='email' type='email' class='tooltip1' title='Your email is required to send message.' ng-model='email' placeholder='Email'/><br />
  Subject  <input name='subject' type='text' class='tooltip1' title='The Subject of your message' ng-model='subject' placeholder='Subject'/><br />
  Your Message<br />
  <textarea name='message' rows='10' cols='40' class='tooltip1' title='Your message to PGV' ng-model='message' >
  </textarea><br />
  <input type='submit' value='Send' class='button submit-button' />
  </form>";
  }
 // header("Cache-Control: no-cache, must-revalidate");
 //used to clear forms after post
?>
