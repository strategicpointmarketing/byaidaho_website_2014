<?php

$EmailFrom = "<$EmailFrom>";
$EmailTo = "Manager@IdahoOutdoorSolutions.com";
$Subject = "Idaho Outdoor Solutions: Contact Submission";
$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Phone = Trim(stripslashes($_POST['Phone'])); 
$Interest = Trim(stripslashes($_POST['Interest'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Interest: ";
$Body .= $Interest;
$Body .= "\n";

$Headers = "From: $Email \r\n";
$Headers .= "Reply-To: $Email \r\n";

$loadtime = $_POST["loadtime"];

$totaltime = time() - $loadtime;

if($totaltime > 3)
{
	// send email 
	$success = mail($EmailTo, $Subject, $Body, $Headers);
}

// redirect to success page 
if ($success){
	//dump data into a CSV file
	
	$line = "$Name,$Email,$Phone,$Interest," . date('d-m-Y');
	$handle = fopen("submissions.csv", "a");
	fputcsv($handle, explode(',',$line));
	fclose($handle);

	


  print "<meta http-equiv=\"refresh\" content=\"0;URL=/contact/thanks.php\">";


}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/contact/error.php\">";
}


?>