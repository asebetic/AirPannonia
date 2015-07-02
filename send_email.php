<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "a.sebetic@gmail.com";
 
    $email_subject = "Registration";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['firstname']) ||
 
        !isset($_POST['lastname']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['usrtel'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['firstname']; // required
 
    $last_name = $_POST['lastname']; // required
	
	$date_of_birth = $_POST['birth_date']; // required
	
	$place_of_birth = $_POST['place_birth']; // not required
	
	$adress = $_POST['adress']; // not required
 
    $email_from = $_POST['email']; // required
	
	$telephone = $_POST['usrtel']; // not required
	
	$types_training = $_POST['types_training']; // not required
	
	$start_training = $_POST['start_training']; // not required
	
	$date_medical = $_POST['date_medical']; // not required
	
	$check_medical = $_POST['check_medical']; // not required
	
	$valid_licence = $_POST['valid_licence']; // not required
 
    $comments = $_POST['comment']; // not required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  /*if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }*/
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
  
  if(strlen($place_of_birth) < 2) {
 
    $error_message .= 'The birth place you entered do not appear to be valid.<br />';
 
  }
  
  if(strlen($adress) < 2) {
 
    $error_message .= 'The adress you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Registration details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Birth Date: ".clean_string($birth_date)."\n";
    $email_message .= "Place of Birth: ".clean_string($place_birth)."\n";
    $email_message .= "Adress: ".clean_string($adress)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Types of Training: ".clean_string($types_training)."\n";
    $email_message .= "Start of Training: ".clean_string($start_training)."\n";
    $email_message .= "Date of Medical Check: ".clean_string($date_medical)."\n";
    $email_message .= "Type of Medical Check: ".clean_string($check_medical)."\n";
    $email_message .= "Validity of Licence: ".clean_string($valid_licence)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n";
 
@mail($email_to, $email_subject, $email_message, $headers);  

?>
 
 <!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Air Pannonia</title>
	<link rel="stylesheet" type="text/css" href="assets/stylesheet/main.css">
	<meta name="viewport" content="width=device-width" content="initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="navbar">
		<nav>
			<a href="index.html">O nama</a>
			<a href="school-planes.html">Flota</a>
			<a href="school.html">Instruktori</a>
			<a href="maintenance.html">Održavanje zrakoplova</a>
			<a href="gallery.html">Galerija</a>
			<a href="contact.html">Kontakt</a>
		</nav>
	</div>
	<div class="container">
		<header>
			<a class="menu-toggle" href="#"><span></span></a>
			<a class="logo" href="index.html"><img src="assets/img/logo.png"></a>

			<nav class="primary-nav">
				<ul>
				  	<li><a href="index.html">O nama</a></li>
				  	<li><a href="#">Pilotska škola</a>
				    	<ul>
					      	<li><a href="school-planes.html">Flota</a></li>
					      	<li><a href="school.html">Instruktori</a></li>  
					    </ul>
					</li>
					<li><a href="maintenance.html">Održavanje zrakoplova</a></li>
					<li><a href="gallery.html">Galerija</a></li>
					<li><a href="contact.html">Kontakt</a></li>
				</nav>
				<ul>
		</header>
	<!-- Content -->
		<div class="content">
			
<p id="register"> Thank you for contacting us. We will be in touch with you very soon.</p>

			<footer>
				<small>Copyright © Air Pannonia 2015</small>
			</footer>
		</div>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="main.js"></script>
</body>
</html>
 
 
<?php
 
}
 
?>