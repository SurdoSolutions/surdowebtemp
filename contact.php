<?php 
	//message vars
	$msg = '';
	$msgClass = '';

    $currentHome;
    $currentAbout;
    $currentProjects;
    $currentContact = "active";

    $pageTitle = "Contact Us";

    $cssFileName = "contact.css";

	//check for submission
	if(filter_has_var(INPUT_POST, 'submit')){
		//Get form data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);
	

		//check required files

		if(!empty($name) && !empty($email) && !empty($message)){
			//passed
			//validate email:
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				//failed
				$msg = "Invalid email address. Please try again.";
				$msgClass = "alert-danger";
			}else{
				//passed validation
				$msg = 'Your message has been successfully validated.';
				$msgClass = 'alert-success';

				//recipient
				$toEmail = 'contact@surdosolutions.com';
				//subject
				$subject = 'Contact Request from '.$name;
				//body
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

				//Email headers:
				$headers = "MIME-Version: 1.0"."\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8"."\r\n";

				//Additional headers
				$headers .= "From: ".$name." <".$email.">"."\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					//sent
					$msg = 'Your message has been successfully submitted. Thanks for your feedback!';
					$msgClass = 'alert-success';
				}else{
					$msg = 'Your email was not sent.';
					$msgClass = 'alert-danger';
				}
			}
		}else{
			$msg = 'Please fill in all fields.';
			$msgClass = 'alert-danger';
		}
	}
?>
    <?php include('inc/header.php'); ?>
	<div class="container">
		<?php if($msg != ''): ?>
			<div class="alert alert-dismissible <?php echo $msgClass; ?>">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo $msg;?>
			</div>
		<?php endif; ?>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name'])? $name : ''; ?>" placeholder="Name">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo isset($_POST['email'])? $email : ''; ?>" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea name="message" class="form-control" value="Enter message here." placeholder="Message"><?php echo  isset($_POST['message'])? $message : ''; ?></textarea>
			</div>
			<br>
			<button id="submit-button" type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
<?php include('inc/footer.php'); ?>
