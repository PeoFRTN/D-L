
<?php


 if (isset($_POST['submit'])) {
 name = $_POST['name'];$
 email = $_POST['email'];
 phone = $_POST['phone'];
 url = $_POST['url'];
 message = $_POST['message'];


$mailTo ="pierre-olivier.fortin@hotmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;


 mail($mailTo, $subject, $txt, $headers);


 header("Location: index.html?mailsend");


 }