<?php 

//SET VARIABLES TO EMPTY VALUES WHEN SCRIPT REFRESHES
$firstName=$lastName=$email=$address=$state=$city=$phoneNumber=$refferedByDr=$appointmentDetails=$result="";
$firstNameErr=$lastNameErr=$emailErr=$addressErr=$stateErr=$cityErr=$phoneNumberErr=$refferedByDrErr=$appointmentDetailsErr=$resultErr="";

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['request_appointment'])){
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


    //EMAIL
    if(empty( $_POST['email'])){
        $emailErr = " "; 
    } else {
    $email = check_Variables($_POST['email']); 
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
    }


    //ADDRRESS
    if(empty( $_POST['address'])){
        $addressErr = "Address is required"; 
    } else {
    $address = check_Variables($_POST['address']); 
    }


    //State
    if(empty( $_POST['state'])){
        $stateErr = " "; 
    } else {
    $state = check_Variables($_POST['state']); 
      // check if state is well-formed
    if (!preg_match("/^[a-zA-Z-' ]*$/", $state)) {
        $stateErr = "Only letters and white space allowed";  
        }
    }


    //City
    if(empty( $_POST['city'])){
        $cityErr = " "; 
    } else {
    $city = check_Variables($_POST['city']); 
      // check if city is well-formed
    if (!preg_match("/^[a-zA-Z-' ]*$/", $city)) {
        $cityErr = "Only letters and white space allowed";  
        }
    }


    //Phone Number
    if(empty( $_POST['phone'])){
        $phoneNumberErr = "Phone number is required"; 
    } else {
    $phoneNumber = check_Variables($_POST['phone']); 
      // check if phone number is well-formed
    if(is_numeric($phoneNumber)) {
        $phoneNumberErr = "Only digits (0-9) allowed";  
        }
    }


    //Referred by a Physician ? 
    if(empty( $_POST['referred_by'])){
        $refferedByDrErr = "Check an option"; 
    } else {
    $refferedByDr= check_Variables($_POST['referred_by']); 
      // check if phone number is well-formed
    }


   //MESSAGE 
    if(empty( $_POST['comment'])){
        $appointmentDetailsErr = ""; 
    } else {
    $appointmentDetails = check_Variables($_POST['comment']); 
    }
 }

    function check_Variables($input) {
        $input = htmlspecialchars($input);
        $input = trim($input);
        $input = stripslashes($input);
        return $input;
    }


    $company_name = "Westend Hospital.Com";
    $sendTo = 'popexbiochemist@gmail.com';

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
        
            $content = '<h2>Patient Biodata & Information</h2><p><b>Full Name: </b>' .$firstName ." ".$lastName.'</p><p> <b>Address:</b> ' .$address. '</p><p> <b>State:</b> ' .$state . '</p><p>  <b>City:</b> ' .$city. '</p><p> <b>Phone Number:</b> ' .$phoneNumber .'</p><p> <b>Email Address: </b> '. $email . '</p> <p> <b>Referred by a Physician?: </b> ' .$refferedByDr. '</p><p><b>Additional Details for Request:</b> ' .$appointmentDetails .'</p>';

            $mail->isHTML(true);                                 
            $mail->Subject = 'New Appointment Request';
            $mail->Body    = $content;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          //CHECK IF ANY OF THE INPUT FIELD IS EMPTY, IF EMPTY DON'T SEND EMAIL;
            if(!empty($firstNameErr) || !empty($lastNameErr) || !empty($addressErr) || !empty($phoneNumberErr) || !empty($refferedByDrErr)) {
            $mail->NULL;
            $result= 'Message not sent';
            } else {
            $mail->send();
             $result= 'Message has been sent';
            }
        } catch (Exception $e) {
            $resultErr = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
