
<html>
<body>
<?php
function spamcheck($field)
  {

  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  

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
  {
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
  else
    {
    $email = $_REQUEST['email'] ; 
    $subject = $_REQUEST['subject'] ;
    $message = $_REQUEST['message'] ;
    mail("shyamyadav.cse@gmail.com", "Subject: $subject",
    $message, "From: $email" );
    echo "Thank you for using our mail form";
    }
  }
else
  {
  echo "<form method='post' action=''>
  Email: <input name='email' type='text' /><br />
  Subject: <input name='subject' type='text' /><br />
  Message:<br />
  <textarea name='message' rows='15' cols='40'>
  </textarea><br />
  <input type='submit' />
  </form>";
  }
?>

</body>
</html>