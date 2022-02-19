<?php
    $msg = '';
	$msgClass = '';

    $pageTitle = "About Us";
    $cssFileName = "about.css";
    $currentHome;
    $currentAbout = "active";
    $currentProjects;
    $currentContact;


    if(filter_has_var(INPUT_POST, 'submit')){
        //Get form data
        $email = htmlspecialchars($_POST['email']);


        //check required files

        if(!empty($email)){
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
                $subject = 'Newsletter Subscription';
                //body
                $body = '
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Subscription</h4>
                ';

                //Email headers:
                $headers = "MIME-Version: 1.0"."\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8"."\r\n";

                //Additional headers
                $headers .= "From: <".$email.">"."\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    //sent
                    $msg = 'Thanks for subscribing! Stay tuned for updates.';
                    $msgClass = 'alert-success';
                }else{
                    $msg = 'Your email was not sent.';
                    $msgClass = 'alert-danger';
                }
            }
        }else{
            $msg = 'Please fill the field.';
            $msgClass = 'alert-danger';
        }
    }

?>
<?php include('inc/header.php'); ?>
<section id="newsletter">
    <?php if($msg != ''): ?>
        <div class="alert alert-dismissible <?php echo $msgClass; ?>">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $msg;?>
        </div>
    <?php endif; ?>
    <div class="container">
    <h1>Subscribe to our newsletter for updates</h1>
    <form action="">
        <input type="email" placeholder="Email" required="true">
        <button type="submit" class="btn btn-primary button_1">Subscribe</button>
    </form>
    </div>
</section>

<section id="main">
    <div class="container">
        <article id="main-col">
            <h1 class="page-title">Our Story</h1>
            <p>We have a passion for quality software and web development. For us, software means far more than just a career. Computers and the code that runs through them are far more than interesting gimmicks or flashy gadgets. Software means learning more about how the world works, how we fit in it, how we can develop solutions and answers, and how we can do more to make our devices and services tools that work for us, not prisons of inefficiency and endless distraction.
            </p>
            </p>
        </article>
        <aside id="sidebar">
            <div class="firebrick">
            <h3>What We Do</h3>
            <p>We develop quality websites for a wide range of clients: businesses, non-profits, individuals looking to build up their digital holdings and seize control of their identity in a bewildering environment of cloud services and computing. Our websites are built from scratch and maintained with diligence, front to back.</p>
            <p>We also work on our own software, in-house mobile apps, web apps, and desktop software. Stay tuned for news about our projects!</p>
            </div>
        </aside>
    </div>
</section>
<section id="about_cards">
    <div class="row">
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="img/fqureshi.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Faraan Qureshi</h5>
                    <p class="card-text">Faraan loves pushing daisies, walking on the Jersey Shore (specifically the Jersey Shore, and under its lovely boardwalks). In his spare time he likes to code.</p>
                </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Java: SE, EE</li>
                        <li class="list-group-item">MEAN Stack Web Development</li>
                        <li class="list-group-item">Spring & Struts</li>
                    </ul>
                <div class="card-body">
                    <a href="#" class="card-link" target="_blank">Website</a>
                    <a href="https://github.com/faqfaraan" class="card-link" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="img/aruwaishan.jpg" alt="Card image cap" id="img-outlier">
                <div class="card-body">
                    <h5 class="card-title">Abdulrahman Al-Ruwaishan</h5>
                    <p class="card-text">Abdulrahman is a person.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Java SE</li>
                    <li class="list-group-item">MEAN Stack Web Development</li>
                    <li class="list-group-item">LAMP Stack Web Development</li>
                </ul>
                <div class="card-body">
                    <a href="http://ruwayshan.com" class="card-link" target="_blank">Website</a>
                    <a href="https://github.com/sanyemaa" class="card-link" target="_blank" ><i class="fa fa-github" aria-hidden="true"></i> Github</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="img/fbaig.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Faisal Baig</h5>
                    <p class="card-text">Faisal is a dashing Don Juan who drives jet skis on the deep blue sea and also develops delightful software.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Java SE</li>
                    <li class="list-group-item">MEAN Web Development</li>
                    <li class="list-group-item">Python</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link" target="_blank">Website</a>
                    <a href="https://github.com/faisalbaig786" class="card-link" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('inc/footer.php'); ?>
