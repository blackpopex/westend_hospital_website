<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
//SET VARIABLES TO EMPTY VALUES WHEN SCRIPT REFRESHES
$ref_firstName=$ref_lastName=$ref_practiceName=$ref_email=$ref_phoneNumber=$pat_firstName=$pat_lastName=$date_of_birth=$pat_phone_number=$diagnosis=$ref_physician_name=$reason_for_referral=$result="";
$ref_firstNameErr=$ref_lastNameErr=$ref_practiceNameErr=$ref_emailErr=$ref_phoneNumberErr=$pat_firstNameErr=$pat_lastNameErr=$date_of_birthErr=$pat_phone_numberErr=$diagnosisErr=$ref_physician_nameErr=$reason_for_referralErr=$resultErr="";

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['refer'])){
//COLLECT ALL THE VARIABLES, RETURN AN ERROR MESSAGE IF CONTENT IS EMPTY

 function check_Variables($input) {
    $input = htmlspecialchars($input);
    $input = trim($input);
    $input = stripslashes($input);
    return $input;
    }
    
//REFERRING PHYSICIAN INFORMATION
//First Name
 if(empty($_POST['ref_firstName'])){
        $ref_firstNameErr = "First name is required"; 
    } else {
    $ref_firstName = check_Variables($_POST['ref_firstName']); 
           // check if first name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $ref_firstName)) {
        $ref_firstNameErr = "Only letters and white space allowed";  
        }
    }


    //Last Name
    if(empty( $_POST['ref-lastName'])){
        $ref_lastNameErr = "Last name is required"; 
    } else {
    $ref_lastName = check_Variables($_POST['ref-lastName']); 
       // check if first name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $ref_lastName)) {
        $ref_lastNameErr = "Only letters and white space allowed";  
        }
    }


     //Practice Name
    if(empty( $_POST['practice_Name'])){
        $ref_practiceNameErr = " "; 
    } else {
    $ref_practiceName = check_Variables($_POST['practice_Name']); 
      if (!preg_match("/^[a-zA-Z-' ]*$/", $ref_practiceName)) {
        $ref_practiceNameErr = "Only letters and white space allowed";  
        }
    }

    //Email
    if(empty( $_POST['ref_email'])){
        $ref_emailErr = "Email is required"; 
    } else {
    $ref_email = check_Variables($_POST['ref_email']); 
    // check if e-mail address is well-formed
    if (!filter_var($ref_email, FILTER_VALIDATE_EMAIL)) {
      $ref_emailErr = "Invalid email format"; 
    }
    }

    //Phone Number
    if(empty( $_POST['ref_phoneNumber'])){
        $ref_phoneNumberErr = "Phone number is required"; 
    } else {
    $ref_phoneNumber = check_Variables($_POST['ref_phoneNumber']); 
    }


    //PATIENT'S INFORMATION

    //Patient firstname
    if(empty( $_POST['pat_firstName'])){
        $pat_firstNameErr = "First name is required"; 
    } else {
    $pat_firstName = check_Variables($_POST['pat_firstName']); 
      // check if state is well-formed
    if (!preg_match("/^[a-zA-Z-' ]*$/", $pat_firstName)) {
        $pat_firstNameErr = "Only letters and white space allowed";  
        }
    }


    //Patient lastname
    if(empty( $_POST['pat_lastName'])){
        $pat_lastNameErr = "Last name is required"; 
    } else {
    $pat_lastName = check_Variables($_POST['pat_lastName']); 
      // check if city is well-formed
    if (!preg_match("/^[a-zA-Z-' ]*$/", $pat_lastName)) {
        $pat_lastNameErr = "Only letters and white space allowed";  
        }
    }


    //Patient DOB
    if(empty( $_POST['pat_date_of_birth'])){
        $date_of_birthErr = "DOB is required"; 
    } else {
    $date_of_birth = check_Variables($_POST['pat_date_of_birth']); 
    }


   //Patient phone number
    if(empty( $_POST['pat_phoneNumber'])){
        $pat_phone_numberErr = "Phone number is required"; 
    } else {
    $pat_phone_number= check_Variables($_POST['pat_phoneNumber']); 
    }


//MEDICAL INFORMATION

    //Diagnosis
    if(empty( $_POST['Diagnosis'])){
        $diagnosisErr = "Diagnosis required"; 
    } else {
    $diagnosis = check_Variables($_POST['Diagnosis']); 
      // check if city is well-formed
    if (!preg_match("/^[a-zA-Z-' ]*$/", $diagnosis)) {
        $diagnosisErr = "Only letters and white space allowed";  
        }
    }


    //Ref. Physician Name
    if(empty( $_POST['reffering_physician_name'])){
        $ref_physician_nameErr = "Referring physician name required"; 
    } else {
    $ref_physician_name = check_Variables($_POST['reffering_physician_name']); 
      // check if phone number is well-formed
     if (!preg_match("/^[a-zA-Z-' ]*$/", $ref_physician_name)) {
        $ref_physician_nameErr = "Only letters and white space allowed";  
        }
    }

   //MESSAGE 
    if(empty( $_POST['reason_for_referral'])){
        $reason_for_referralErr = "Reason for referral required"; 
    } else {
    $reason_for_referral = check_Variables($_POST['reason_for_referral']); 
    }

 

    $company_name = "Westend Hospital.Com";
    $sendTo = 'smartestjohnny@gmail.com';

        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'thewestendhospital.com';                    
            $mail->SMTPAuth   = true;                                 
            $mail->Username   = 'sendingemail@thewestendhospital.com';                  
            $mail->Password   = 'Cheese2468';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                   

            $mail->setFrom('sendingemail@thewestendhospital.com', $company_name);
            $mail->addAddress($sendTo);     
        
              $content = '<div><h2>Referring Physician Information</h2><p><b>Full Name: </b> Dr. '.$ref_firstName ." ".$ref_lastName.'</p><p> <b>Practice Name:</b> ' .$ref_practiceName. '</p><p> <b>Email:</b> ' .$ref_email . '</p><p>  <b>Phone Number:</b> ' .$ref_phoneNumber. '</p></p></div><br><br><div><h2>Patient Information</h2><p><b>Full Name: </b> ' .$pat_firstName." ".$pat_lastName. '</p><p><b>Date of Birth: </b> '.$date_of_birth.'</p><p><b>Phone Number:</b> '.$pat_phone_number .'</p></div><br><br><div><h2>Medical Information</h2><p><b>Diagnosis:</b> ' .$diagnosis.'</p><p><b>Referring Physician Name:</b> '.$ref_physician_name.'</p><p><b>Reasons for Referral: </b>'.$reason_for_referral.'</p></div>';

            $mail->isHTML(true);                                 
            $mail->Subject = 'New Patient Referral';
            $mail->Body    = $content;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          //CHECK IF ANY OF THE INPUT FIELD IS EMPTY, IF EMPTY DON'T SEND EMAIL;
            if(!empty($ref_firstNameErr) || !empty($ref_lastNameErr) || !empty($ref_emailErr) || !empty($ref_phoneNumberErr) || !empty($pat_firstNameErr) || !empty($pat_lastNameErr) || !empty($date_of_birthErr) || !empty($pat_phone_numberErr) || !empty($diagnosisErr) || !empty($ref_physician_nameErr) || !empty($reason_for_referralErr)) {
            $mail->NULL;
            $result= 'Message not sent';
            } else {
            $mail->send();
             $result= 'Message has been sent';
            }
        } catch (Exception $e) {
            $resultErr = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
}

