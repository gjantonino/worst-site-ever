<?php 

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "info@gregorioantonino.com";
    $subject = "Print Inquiry";
    $mailheader = "From: $email \r\n";
   
    if(isset($_POST['g-recaptcha-response'])){
      $captcha=$_POST['g-recaptcha-response'];
    }
    
    if (empty($_POST["email"])) 
    {
        echo "Email is required";
        exit;
    } 
    else 
    {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            echo "Invalid email format";
            exit;
        }
    }

    if(!$captcha)
    {
        echo '<h2>Please check the the captcha form.</h2>';
        exit;
    }

    $secretKey = "6LfVO0AUAAAAAEOO_kjcO5BSNU4J_Au-gKqwZAtu";
    $ip = $_SERVER['REMOTE_ADDR'];

    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
    $responseKeys = json_decode($response,true);
    
    if(intval($responseKeys["success"]) !== 1) {
        echo '<h2>You are spammer</h2>';
    } 
    else 
    {
        mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
        echo "<p>Thank You! I'll get back to you shortly</p>";
    }
    
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>