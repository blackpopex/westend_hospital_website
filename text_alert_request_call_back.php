<?php 

//SET VARIABLES TO EMPTY VALUES WHEN SCRIPT REFRESHES
$firstName=$lastName=$phone=$result="";
$firstNameErr=$lastNameErr=$phoneErr=$resultErr="";

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['request_callBack'])){
//COLLECT ALL THE VARIABLES, RETURN AN ERROR MESSAGE IF CONTENT IS EMPTY


//FIRST NAME
 if(empty($_POST['firstName'])){
        $firstNameErr = "First Name is required"; 
    } else {
    $firstName = check_Variables($_POST['firstName']); 
           // check if first name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
        $firstNameErr = "Only letters and white space allowed";  
        }
    }


    //LAST NAME
    if(empty( $_POST['lastName'])){
        $lastNameErr = "Last Name is required"; 
    } else {
    $lastName = check_Variables($_POST['lastName']); 
       // check if first name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
        $lastNameErr = "Only letters and white space allowed";  
        }
    }


    //Phone Number
    if(empty( $_POST['phoneNumber'])){
        $phoneErr = "Phone Number is required"; 
    } else {
    $phone = check_Variables($_POST['phoneNumber']); 
    // check if e-mail address is well-formed
    if (!is_numeric($phone)) {
      $phoneErr = "Invalid number format"; 
    }
    }

}

    function check_Variables($input) {
        $input = htmlspecialchars($input);
        $input = trim($input);
        $input = stripslashes($input);
        return $input;
    }


    //Specifies Name of company
    $company_name = "Westend Hospital.Com";
    //Specifies Email address to send callback request to
    $sendTo = 'mercyisioma4real@yahoo.com';
        
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'thewestendhospital.com';                    
            $mail->SMTPAuth   = true;                                 
            $mail->Username   = 'sendingemail@thewestendhospital.com';                  
            $mail->Password   = 'Bravo212#$';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                   

            $mail->setFrom('sendingemail@thewestendhospital.com', $company_name);
            $mail->addAddress($sendTo);     
        
            $content = '<h2>Patient Information</h2><p><b>Full Name: </b>' .$firstName ." ".$lastName.'</p><p> <b>Phone Number:</b> ' .$phone. '</p></p>';

            $mail->isHTML(true);                                 
            $mail->Subject = 'Requesting CallBack';
            $mail->Body    = $content;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          //CHECK IF ANY OF THE INPUT FIELD IS EMPTY, IF EMPTY DON'T SEND EMAIL;
            if(!empty($firstNameErr) || !empty($lastNameErr) || !empty($phoneErr)) {
            $mail->NULL;
            } else {
            $mail->send();
            $result= 'Call Request sent';
            }
        } catch (Exception $e) {
            $resultErr = "Error sending Call Request. Mailer Error: {$mail->ErrorInfo}";
        }
 




