<?php 

//SET VARIABLES TO EMPTY VALUES WHEN SCRIPT REFRESHES
$firstName=$lastName=$email=$qtype=$question=$result="";
$firstNameErr=$lastNameErr=$emailErr=$qtypeErr=$questionErr=$resultErr="";

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['contact_us'])){
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
        $emailErr = "Email is required"; 
    } else {
    $email = check_Variables($_POST['email']); 
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
    }

    //QUESTION TYPE
    if(empty( $_POST['typeOfQuestion'])){
        $qtypeErr = "Select question type"; 
    } else {
    $qtype = check_Variables($_POST['typeOfQuestion']); 
    }


   //MESSAGE 
    if(empty( $_POST['yourQuestion'])){
        $questionErr = "Your question or message is required"; 
    } else {
    $question = check_Variables($_POST['yourQuestion']); 
    }
 }

    function check_Variables($input) {
        $input = htmlspecialchars($input);
        $input = trim($input);
        $input = stripslashes($input);
        return $input;
    }

    $company_name = "Westend Hospital.Com";


//SEND INPUT TO CERTAIN EMAIL BAISED ON QUESTION TYPE (MEDICAL OR TO GENERAL EMAIL)

        if($qtype === "General Question"){
            $sendTo = 'blackpopex@yahoo.com';
        } else {
            $sendTo = 'mercyisioma4real@yahoo.com';
        }

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
        
            $content = '<h2>Patient Information</h2><p><b>Full Name: </b>' .$firstName ." ".$lastName.'</p><p> <b>Email:</b> ' .$email. '</p><p> <b>Message:</b> ' . $question . '</p>';

            $mail->isHTML(true);                                 
            $mail->Subject = 'New Question';
            $mail->Body    = $content;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          //CHECK IF ANY OF THE INPUT FIELD IS EMPTY, IF EMPTY DON'T SEND EMAIL;
            if(!empty($firstNameErr) || !empty($lastNameErr) || !empty($emailErr) || !empty($questionErr)) {
            $mail->NULL;
            $result= 'Message not sent';
            } else {
            $mail->send();
             $result= 'Message has been sent';
            }
        } catch (Exception $e) {
            $resultErr = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
 





