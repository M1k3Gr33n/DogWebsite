<?php $groomer = $_POST['groomer'];
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$petsName = $_POST['pets-name'];
$petsBreed = $_POST['pets-breed'];
$appointment = $_POST['appointment'];
$formcontent ='$firstName $lastName would like an appointment for their $petsBreed dog
$petsName.\n';
$email = $_POST['email'];
$recipient = 'groomingsalonbooking@gmail.com';
$subject = "Appointment Request";
$mailheader = 'From: $email \r\n';

mail($recipient, $subject, $formcontent, $mailheader);
echo "Thank you! Your request has been sent off and you will be contacted."
?>
