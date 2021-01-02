	<?php
	if(!isset($_POST['submit']))
	{
		//This page should not be accessed directly. Need to submit the form.
		echo "error; you need to submit the form!";
	}


	$name = $_POST['name'];
	$visitor_email = $_POST['email'];

	$question = $_POST['question'];

	$answer1 = $_POST['answer1'];
	$answer2 = $_POST['answer2'];
	$answer3 = $_POST['answer3'];
	$answer4 = $_POST['answer4'];
	$answer5 = $_POST['answer5'];

	$answer1check = $_POST['answer1check'];
	$answer2check = $_POST['answer2check'];
	$answer3check = $_POST['answer3check'];
	$answer4check = $_POST['answer4check'];
	$answer5check = $_POST['answer5check'];

	$explanation = $_POST['explanation'];

	$objectives1 = $_POST['objectives1'];
	$objectives2 = $_POST['objectives2'];
	$objectives3 = $_POST['objectives3'];


	//Validate first
	if(empty($name)||empty($visitor_email))
	{
		echo "Name and email are mandatory!";
		exit;
	}






	if(IsInjected($visitor_email))
	{
		echo "Bad email value!";
		exit;
	}

	//generate a new id
	$datetime_array = getdate();
	$year = $datetime_array{year};
	$mon = $datetime_array{mon};
	$mday = $datetime_array{mday};
	$hours = $datetime_array{hours};
	$minutes = $datetime_array{minutes};
	$seconds = $datetime_array{seconds};

	$regdate = $mday."-".$mon."-".$year;
	$regtime = $hours.":".$minutes;

	//echo "year = ". $year%2000;
	//echo "seconds without = ". $seconds;
	//echo "seconds = ". floor( $seconds/10 );

	// we want just the last digit
	$year = $year%2000;

	// Paid version of our programs should be different, lets subtract 2 from the year;
	//$year = $year - 2;

	// we want just the first digit
	$seconds = floor( $seconds/10 );

	if ($mon < 10) $mon = "0".$mon;
	if ($mday < 10) $mday = "0".$mday;
	if ($hours < 10) $hours = "0".$hours;
	if ($minutes < 10) $minutes = "0".$minutes;

	//echo "\n mon = ".$mon;
	//echo "\n mday = ".$mday;
	//echo "\n hours = ".$hours;
	//echo "\n minutes = ".$minutes;
	//echo "\n seconds = ".$seconds;


	$registrationno = "Q".$year.$mon.$mday.$hours.$minutes.$seconds;


	$email_from = 'contests.ejavaguru@gmail.com';//<== update the email address
	$email_subject = "eJavaGuru's Online Contest : Q no. $registrationno (Write your own sample exam question for OCA Java SE 8 Prog I Cert)";
	$email_body = "Hi $name,
	\nThanks for participating in this contest and giving back to the community.
	\nHere's a copy of the contents that you submitted:
	\n\nName: $name
	\nEmail: $visitor_email
	\nQuestionText: $question
	\n\nAnswer Option1: $answer1
	\nIs Option1 correct: $answer1check
	\n\nAnswer Option2: $answer2
	\nIs Option2 correct: $answer2check
	\n\nAnswer Option3: $answer3
	\nIs Option3 correct: $answer3check
	\n\nAnswer Option4: $answer4
	\nIs Option4 correct: $answer4check
	\n\nAnswer Option5: $answer5
	\n\nAnswer Explanation: $explanation
	\n\nExamObjectives :
	\n$objectives1
	\n$objectives2
	\n$objectives3
	\n\nWith much respect, \nMala Gupta \nFounder, eJavaGuru.com
	\n\n".


	$to = $email_from;//<== update the email address
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	//Send the email!
	mail($to,$email_subject,$email_body,$headers);

	mail($visitor_email,$email_subject,$email_body,$headers);


	//done. redirect to thank-you page.
	header('Location: thanks.html');


	// Function to validate against any email injection attempts
	function IsInjected($str)
	{
	  $injections = array('(\n+)',
				  '(\r+)',
				  '(\t+)',
				  '(%0A+)',
				  '(%0D+)',
				  '(%08+)',
				  '(%09+)'
				  );
	  $inject = join('|', $injections);
	  $inject = "/$inject/i";
	  if(preg_match($inject,$str))
		{
		return true;
	  }
	  else
		{
		return false;
	  }
	}

?>