<?php
    define("TITLE", "Contact us | Franklin's Fine Dining");
    include('includes/header.php');
?>
        <div id="contact">

            <hr>
            <h1>Get in touch with us!</h1>
<?php
    if (isset ($_POST['contact_submit'])) {
        
        $name   = trim($_POST['name']);
        eemail  = trim($_POST['email']);
        msg     = $_POST['message']
    }
?>
        
        <form method="post" action="" id="contact-form">
            
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name">
            
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email">
            
            <label for="message">And Your message</label>
            <textarea id="message" name="message"></textarea>
            
            <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
            <label for="email">Subscribe to newsletter</label>
            
            <input type="submit" class="button next" name="contact-submit" value="Send Message"
        
        </form>

        </div><!-- contacts -->
<?php 
    include('includes/footer.php'); ?>