<?php
    $currentHome;
    $currentAbout;
    $currentServices;
    $currentProjects = "active";
    $currentContact;
    $pageTitle = "Our Work";
    $cssFileName = "projects.css";

?>


    <?php include('inc/header.php'); ?>
    
    <div id="projects-header">
        <h1 class="text-center">What we're making:</h1>
        <br>
    </div>

   <div class="container">
        <h1>Projects</h1>
        <div class="card m-4">
            <div class="card-header">
                In Development
            </div>
            <div class="card-body">
                <h5 class="card-title">Library Catalogue Application</h5>
                <p class="card-text">This application will be allow the user to store information about their personal libraries, organize material, cross-reference various works, and record notes. With future updates, other forms of personal media will be a part of the application as well</p>
                <h5 class="h5">More information coming soon.</h5>
            </div>
        </div>

        <div class="card m-4">
            <div class="card-header">
                In Development
            </div>
            <div class="card-body">
                <h5 class="card-title">STEM API</h5>
                <p class="card-text">We are creating an API that will hold information for various fields of science. This API will play a large role in our future STEM applications. </p>
                <h5 class="h5">More information coming soon.</h5>
            </div>
        </div>

        <div class="card m-4">
            <div class="card-header">
                In Development
            </div>
            <div class="card-body">
                <h5 class="card-title">Study Assistant</h5>
                <p class="card-text">An app to help with studying through psychologically-proven methods, providing timed reminders, scheduling functionality, self-testing options, and more.</p>
                <h5 class="h5">More information coming soon.</h5>
            </div>
        </div>
        
        
    </div>

    <?php include('inc/footer.php'); ?>



