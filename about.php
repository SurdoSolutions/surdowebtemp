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
          <button type="submit" class="button_1">Subscribe</button>
        </form>
        </div>
    </section>
    
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Our Story</h1>
                <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                </p>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
            </article>
            <aside id="sidebar">
                <div class="crimson">
                <h3>What We Do</h3>
                <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."</p>
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
                        <p class="card-text">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."</p>
                    </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    <div class="card-body">
                        <a href="#" class="card-link" target="_blank">Card link</a>
                        <a href="https://github.com/faqfaraan" class="card-link" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top" src="img/aruwaishan.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Abdulrahman Al-Ruwaishan</h5>
                        <p class="card-text">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
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
                        <p class="card-text">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
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
