
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

 if (isset($_POST['submit'])) {
 $name = $_POST['name'];
 $mailFrom = $_POST['email'];
 $phone = $_POST['phone'];
 $url = $_POST['url'];
 $message = $_POST['message'];
















$mailTo ="info@distributiongdl.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message.".\n\n".$phone.".\n\n".$url;


 mail($mailTo, $subject, $txt, $headers);

 echo "Merci, \nNous vous contacterons très bientôt!";

 }

 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>