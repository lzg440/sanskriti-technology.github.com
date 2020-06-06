<?php



// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MSG Guest
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $guest = $_POST["guest"];
}

/*
// MSG Event
if (empty($_POST["event"])) {
    $errorMSG .= "Subject is required ";
} else {
    $event = $_POST["event"];
}
*/

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "sanskrithitechnology@gmail.com";
$Subject = "New Message from gitsite";
$errorMSG = "msg not reciverd";
// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "msg_subject: ";
$Body .= $msg_subject;
$Body .= "\n";
/*$Body .= "event: ";
$Body .= $event;
$Body .= "\n";*/
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong ";
    } else {
        echo "i am here";
		/* echo $errorMSG;*/
    }
}

?>