<html>
<body>
	<?php

	if(!$_POST["emailAddr"]){
		die("Error!");
	}else{
		$to = $_POST["emailAddr"];
		$subject = "HTML Form Test";
		$message = "Sent via HTML form using PHP to $to";
		$headers = "From: PHP/" . phpversion();

		if(mail($to, $subject, $message, $headers)){
			echo "Successfully sent!";
		}else{
			echo "Failed!";
		}
	}

	?>
</body>
</html>