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
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <p>Pricing: $150-$300, depending on the complexity of the project.</p>
                </li>
                <li>
                    <h3>Website Maintenance</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <p>Pricing: $100/month, depending on the complexity of the website.</p>
                </li>
                <li>
                    <h3>App Design</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
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
                    <button type="submit" name="submit" class="button_1">Submit</button>
                </form>           
            </div>
        </aside>
   </div> 

    <?php include('inc/footer.php'); ?>



