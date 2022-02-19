<?php
    $currentHome;
    $currentAbout;
    $currentServices = "active";
    $currentProjects;
    $currentContact;
    $pageTitle = "Our Work";
    $cssFileName = "projects.css";

?>


    <?php include('inc/header.php'); ?>
    
    <div id="projects-header">
        <h1 class="text-center">Need Solutions? Look no further.</h1>
        <br>
    </div>

   <div class="container">
       <article id="main-col">
           <h1>Services</h1>
            <ul id="services">
                <li>
                    <h3>Website Design and Setup A-Z</h3>
                    <p>We will design and set up a beatiful website designed according to your specifications, then turn over the keys to you. Don't worry! By setting you up with the famed Wordpress management system, we will leave you completely able to maintain your website yourself--no matter your tech experience!</p>
                    <p>Pricing: $150+, depending on the complexity of the project. Use the quote form to the right to tell us about your project, or <a href="contact.php">click here to contact us if you want to ask some questions before you get your quote.</a></p>
                </li>
                <li>
                    <h3>Website Hosting Solutions</h3>
                    <p>If you'd rather have someone doing the drudge work for you, just give us the word and we'll set you up with one of our website solutions packages. We'll do everything we do in Website Design and Setup A-Z, <strong>plus</strong> look after your website for you--backing it up, updating it with the latest in security and features, and adding whatever you'd like us to add.</p>
                    <p>Pricing: As low as $8+/month, depending on the complexity of the website.</p>
                </li>
                <li>
                    <h3>App Design</h3>
                    <h4>Coming Soon!</h4>
                    <p>Have you ever bounced back and forth between apps, constantly disappointed by this or that shortcoming? Have you ever searched and searched for a feature that no one seems to have cared enough about to program?</p>
                    <p>Well, search no more! Tell us about your dream app, and we'll make it for you.</p>
                    <p><a href="contact.php"><strong>Tell us</strong></a> about your project.</p>
                </li>
            </ul>
        </article>
        <aside id="sidebar">
            <div class="dark">
                <h3>Get a Quote</h3>
                <form action="<?php echo $_ ?>" class="quote">
                    <div class="quote-field">
                        <label for="name">Name</label><br>
                        <input id="name" type="text" name="name" placeholder="Name">
                    </div>
                    <div class="quote-field">
                        <label for="email">Email</label><br>
                        <input id="email" type="email" name="name" placeholder="Email">
                    </div>
                    <div class="quote-field">
                        <label for="message">Details</label><br>
                        <textarea id="message" name="name" placeholder="Details"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary button_1">Submit</button>
                </form>           
            </div>
        </aside>
   </div> 

    <?php include('inc/footer.php'); ?>



