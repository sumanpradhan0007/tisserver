<?php
date_default_timezone_set( "Asia/Kolkata" );
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
        $servername = "localhost";
    	$username = "hospital_khojo";
    	$password = "hospital_khojo";
    	$dbname = "hospital_khojo";
    
    	try {
    		$conn = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password );
    		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    		
    		$search_sql="select * from lead where email='".$_POST[ 'email' ]."' and phone='".$_POST[ 'phone' ]."'";
    		$result = $conn->prepare($search_sql); 
    		$result->execute();
    		$number_of_rows = $result->fetchColumn(); 
    
    		//echo $number_of_rows; die;
    		if($number_of_rows > 0)
    		{
    			header( "location:index.php?status=Already exist." );
    		}
    		else
    		{
    			$sql = "INSERT INTO lead (fname,email,phone,city,message,utm_source,utm_medium,utm_campaign,utm_term,utm_content)
    			VALUES ('" . $_POST[ 'fname' ] . "','" . $_POST[ 'email' ] . "','" . $_POST[ 'phone' ] . "','" . $_POST[ 'city' ] . "','" . $_POST[ 'message' ] . "','" . $_POST[ 'utm_source' ] . "','" . $_POST[ 'utm_medium' ] . "','" . $_POST[ 'utm_campaign' ] . "','" . $_POST[ 'utm_term' ] . "','" . $_POST[ 'utm_content' ] . "')";
    			$conn->exec( $sql );
    		}
    
    	} catch ( PDOException $e ) {
    
    		echo $sql . "<br>" . $e->getMessage();
    		
    		
    
    	}
    
    	$conn = null;






        # FIX: Replace this email with recipient email
        $mail_to = "hospitalkhojo@gmail.com";
        
        # Sender Data
        $subject = trim("HospitalKhojo Enquire Form");
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["fname"])));
        $phone = trim($_POST["phone"]);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);
        
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($phone) OR empty($subject) OR empty($message)) {
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }
        
        # Mail Content
        $content = "Name: $name\n";
        $content .= "Email: $email\n";
        $content .= "Phone: $phone\n";
        $content .= "Message:$message\n";

        # email headers.
        $headers = "From: $name <$email>";

        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
			header("location: https://jaipurhospitals.com/thankyou.php");
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong, we couldn't send your message.";
        }
    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }
?>
