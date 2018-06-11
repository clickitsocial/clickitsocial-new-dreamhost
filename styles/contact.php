<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clickit Social | Contact Us</title>
    <link href="https://fonts.googleapis.com/css?family=Bitter|Lato" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/normalize.css">
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
                <img src="images/Logo.png">
            </div>
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
    <div class="contact-page-title">
        <h1>Contact Us</h1>
        <h3>Feel free to reach out to us at (702) CLICKIT or (702) 254-2548.
        </h3>
    </div>
    <!-- Contact Form -->
        <form id="contact-page-form" action="">
            <label for="name">Hi, my name is</label>
            <input type="text" name="name" placeholder="name">
            <br>
            <label for="company">
                with</label>
            <br>
            <input type="text" name="company" placeholder="company">
            <br>
            <label for="phone">You can reach me at</label>
            <input type="text" name="phone" placeholder="phone">
            <br>
            <label for="email"> or
                <br>
            </label>
            <input type="text" name="email" placeholder="email">
            <br>
            <label for="subject">I am interested in</label>
            <input type="text" name="subject" placeholder="subject">
            <br>
            <textarea name="message" rows="1" cols="40" placeholder="message"></textarea>
            <br>
            <button type="submit">Send</button>
        </form>
    </div>
</body>
<footer></footer>

</html>