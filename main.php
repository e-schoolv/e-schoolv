<?php
if($_POST['subject'] == 1)
{
    $subject = 'Հարց դպրոցից';
} else if ($_POST['subject'] == 2) {
    $subject = 'Գործնական հարց';
} else if ($_POST['subject'] == 3) {
    $subject = 'Անձնական հարց';
} else if ($_POST['subject'] == 4) {
    $subject = 'Դիզայն';
} else if ($_POST['subject'] == 5) {
    $subject = 'Մոնտաժ';
} else if ($_POST['subject'] == 6) {
    $subject = 'Ծրագրավորում';
} 


$to = "narek.sargsyanchess@mail.ru";
$from = trim($_POST['email']);

$message = htmlspecialchars($_POST['message']);
$message = urldecode($message);
$message = trim($message);

$headers = "From: $from" . "\r\n" . "Reply-To: $from" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Message: $message" . "\r\n";


if(mail($to,$subject,$message,$headers))
{
    echo "Նամակը ուղարկված է" . "<br>" . "Դուք հետ կվերադառնաք գլխավոր կայք 5 վարկյանից";
    header('Refresh: 5; url= index.php');
    exit;
}else{
    echo "Նամակը ուղարկված չէ";
}
?>