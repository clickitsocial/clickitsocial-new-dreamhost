<?php
if(isset($_POST['email'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "rizky@clickitsocial.com";
    $email_subject = "Testing";
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    // validation expected data exists
    if(!isset($_POST['name']) ||
       !isset($_POST['email']) ||
       !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required
    $company = $_POST['company'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp,$email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    $string_exp = "/^[A-Za-z .'-]+$/";
    if(!preg_match($string_exp,$name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br />';
    }
    if(strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br />';
    }
    if(strlen($error_message) > 0) {
        died($error_message);
    }
    $email_message = "You have received an email. Details are listed below.\n\n";
    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Company: ".clean_string($company)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    // create email headers
    $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>


    <!-- include your own success html here -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Clickit Social | Services</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Bitter|Lato" rel="stylesheet">
        <link rel="stylesheet" href="/styles/normalize.css">
        <link rel="stylesheet" href="/styles/style.css">
    </head>

    <body>
        <header>
            <nav class="navigation">
                <div class="container" onclick="myFunction(this); toggleHam();">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <div class="site-icon">
                    <a href="https://clickitsocial.com">
                        <img src="images/Logo.png">
                    </a> </div>
                <ul class="ul-other-pages">
                    <li>
                        <a href="/index.html">Home</a>
                    </li>
                    <li>
                        <a href="/about/about.html">About Us</a>
                    </li>
                    <li>
                        <a href="../services/services.html">Services</a>
                    </li>
                    <li>
                        <a href="/contact.html">Contact</a>
                    </li>
                </ul>
                <h2 class="navigation-phone">(702) CLICKIT</h2>
            </nav>
        </header>
        <main>
            <div class="thanks">
                <p>Thank you for submitting!</p>
                <p>You will be redirected to home page in <span class="c" id="5">5</span> seconds.</p>
                <p>If you are not redirected automatically please click <a href="/index.html">here</a></p>
            </div>
        </main>
        <footer class="thanks-page-footer">
            <div id="service-footer" class="footer">
                <ul>
                    <li>
                        <a href="">Terms of Use</a>
                    </li>
                    <li>
                        <a href="">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="">Contact Us</a>
                    </li>
                    <li>
                        <a href="/careers.php">Careers</a>
                    </li>
                </ul>
                <ul id="copyright">
                    <li>&copy; 2018 Clickit Social</li>
                </ul>
            </div>
        </footer>
        <script src="/scripts/script.js"></script>
    </body>

    </html>

    <?php
}
?>
