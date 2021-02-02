<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if (isset($_POST['submit'])) {

    //check email
if(empty($_POST['email_addr']))
$msg_email = "You must supply your email";
$email_subject = $_POST['email_addr'];
$email_pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
preg_match($email_pattern, $email_subject, $email_matches);
if(!$email_matches[0])
$msg2_email = "Must be of valid email format";
}

if(isset($_POST['submit'])){
    if( $msg_email=="" && $msg2_email=="")
    $msg_success = "You filled email correctly";
    }

?>
<form id="registration_form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<label>Email address<span class="note">*</span>:</label>
  <input type="text" name="email_addr" value="<?php echo $_POST['email_addr']; ?>">
   <?php echo "<p class='note'>".$msg_email."</p>";?>
  <?php echo "<p class='note'>".$msg2_email."</p>";?>
  <?php echo "<h3 class='success_msg'>".$msg_success."</h3>"; ?>
  <button type="submit" class="btn btn-large btn-primary" name="submit">SUBMIT</button>
</form>

</body>
</html>
