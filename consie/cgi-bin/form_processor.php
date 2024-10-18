<?php

    require '../phpmailer/PHPMailerAutoload.php';

    // Only process POST requests.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Get the form fields and remove whitespace.
        $formName = strip_tags(trim($_POST["formName"]));
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $fname = strip_tags(trim($_POST["name"]));
        $fname = str_replace(array("\r","\n"),array(" "," "),$fname);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = strip_tags(trim($_POST["phone"]));
        $message = trim($_POST["message"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            exit;
        }

        //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Setting SMTP
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->Host = "mail.trackgraphics.it";
        $mail->Username = "info@trackgraphics.it";
        $mail->Password = "H5J,k2)VA5dm";
        $mail->Port = 25;
        //Set who the message is to be sent from
        $mail->setFrom("info@trackgraphics.it", $name);
        //Set who the message is to be sent to
        $mail->addAddress("info@trackgraphics.it", "Informazioni");
        $mail->addAddress("lorenzo.cavicchi@trackgraphics.it", "Informazioni");
        //Set the subject line
        $mail->Subject = "Richiesta informazioni" . ' (' . $formName . ')' ;
        //Set the message body
        $body =  "<ul>";
        $body .=     "<li>Nome: " . $name . "</li>";
        $body .=     "<li>Cognome: " . $fname . "</li>";
        $body .=     "<li>Email: " . $email . "</li>";
        $body .=     "<li>Telefono: " . $phone . "</li>";
        $body .= "</ul>";
        $body .= "<p>" . $message . "</p>";
        $mail->MsgHTML($body);

        //send the message, check for errors
        if (!$mail->send()) {
            echo $mail->ErrorInfo;
            http_response_code(500);
        } else {
            // Set a 200 (okay) response code.
            echo "Tutto OK";
            http_response_code(200);
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
    }

?>