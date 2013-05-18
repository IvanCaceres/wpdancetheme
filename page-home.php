<?php
/*
Template Name: Homepage
*/
?>

<div class="padding" xmlns="http://www.w3.org/1999/html">
    <iframe width="420" height="315" src="http://www.youtube.com/embed/9rJoB7y6Ncs" frameborder="0" allowfullscreen></iframe>
    <div class="hometabs">
        <a href="#" id="registration">
            <img src="/dance/wp-content/themes/roots/assets/img/pencil.png" />
            <p class="hometabstext">Fast <span>Registration</span></p>
            <p>It's simple!</p>
       </a>
        <a href="#" id="contact">
            <img src="/dance/wp-content/themes/roots/assets/img/envelope.png" />
            <p class="hometabstext">Contact <span>Studio</span></p>
            <p>We have answers!</p></a>
        <a href="#" id="connect">
            <img src="/dance/wp-content/themes/roots/assets/img/fb_cutout.png" />
            <p class="hometabstext">Get <span>Connected</span></p>
            <p>Follow us!</p></a>
    </div>
    <div class="boxcontainer">
        <a href="#" class="boxes">
            <img src="/dance/wp-content/themes/roots/assets/img/calendar.png" />
            <p>Class Schedule</p>
        </a>
        <a href="#" class="boxes">
            <img src="/dance/wp-content/themes/roots/assets/img/plus.png" />
            <p>Try a Class for Free</p>
        </a>
        <a href="#" class="boxes">
            <img src="/dance/wp-content/themes/roots/assets/img/notepad.png" />
            <p>Register for Dance</p>
        </a>
        <a href="#" class="boxes">
            <img src="/dance/wp-content/themes/roots/assets/img/speechbubble.png" />
            <p>Video Testimonials</p>
        </a>
    </div>
    <div id="homepost">
        <?php
        // Custom widget Area Start
        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Homepage Post') ) : ?>
            <?php endif;
// Custom widget Area End
        ?>
        </div>
    <div id="sidebar">
        <img src="/dance/wp-content/themes/roots/assets/img/notebook.png" />
        <h1>Recent News</h1>
        <?php
        // Custom widget Area Start
        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary Sidebar') ) : ?>
            <?php endif;
// Custom widget Area End
        ?>
    </div>