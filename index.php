<?php
//message vars
$msg = '';
$msgClass = '';
$currentHome = "active";
$currentAbout;
$currentProjects;
$currentContact;
$pageTitle = "Simple Solutions";
$cssFileName = "index.css";

//check for submission
if (filter_has_var(INPUT_POST, 'submit')) {
	//Get form data
	$email = htmlspecialchars($_POST['email']);


	//check required files

	if (!empty($email)) {
		//passed
		//validate email:
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			//failed
			$msg = "Invalid email address. Please try again.";
			$msgClass = "alert-danger";
		} else {
			//passed validation
			$msg = 'Your message has been successfully validated.';
			$msgClass = 'alert-success';

			//recipient
			$toEmail = 'contact@surdosolutions.com';
			//subject
			$subject = 'Newsletter Subscription';
			//body
			$body = '
					<h4>Email</h4><p>' . $email . '</p>
					<h4>Subscription</h4>
				';

			//Email headers:
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

			//Additional headers
			$headers .= "From: <" . $email . ">" . "\r\n";

			if (mail($toEmail, $subject, $body, $headers)) {
				//sent
				$msg = 'Thanks for subscribing! Stay tuned for updates.';
				$msgClass = 'alert-success';
			} else {
				$msg = 'Your email was not sent.';
				$msgClass = 'alert-danger';
			}
		}
	} else {
		$msg = 'Please fill the field.';
		$msgClass = 'alert-danger';
	}
}
?>

<?php include('inc/header.php'); ?>
<div class="jumbotron text-center">
	<h1 class="display-3" id="jumbo-text">absurdly simple solutions.</h1>
	<h2 id="jumbo-text">Web design, software development, and consulting.</h2>
</div>

<section id="newsletter">
	<?php if ($msg != '') : ?>
		<div class="alert alert-dismissible <?php echo $msgClass; ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo $msg; ?>
		</div>
	<?php endif; ?>
	<div class="container">
		<h1>Subscribe to our newsletter for updates</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : '' ?>" placeholder="Email">
			<button type="submit" name="submit" class="btn btn-primary button_1">Subscribe</button>
		</form>
	</div>
</section>

<section id="boxes">
	<div class="container">
		<h4 class="text-center">A complete set of solutions: create your website, control your online identity, secure your digital assets, and develop apps.</h4>
		<div class="box">
			<a href="https://www.w3.org/html/" target="_blank"><img src="./img/logohtml5.png" alt=""></a>
		</div>
		<div class="box">
			<a href="https://www.w3.org/TR/2011/REC-CSS2-20110607/" target="_blank"><img src="./img/logocss3.png" alt=""></a>
		</div>
		<div class="box">
			<a href="http://www.php.net/" target="_blank"><img src="./img/php-med-trans.png" alt=""></a>
		</div>
		<div class="box">
			<a href="https://developer.android.com/index.html" target="_blank"><img src="./img/android-logo.png" alt=""></a>
		</div>
		<div class="box">
			<a href="https://nodejs.org/en/" target="_blank"><img src="./img/nodejs-new-pantone-black.png" alt=""></a>
		</div>

		<div class="box">
			<a href="https://electronjs.org/" target="_blank"><img src="./img/electronjslogo.png" alt=""></a>
		</div>
	</div>
</section>
<?php include('inc/footer.php'); ?>