<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Clickit Social | Contact Us</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"crossorigin="anonymous">
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
                        <a href="/services.php">Services</a>
                    </li>
                    <li>
                        <a href="/contact.php">Contact</a>
                    </li>
                </ul>
                <h2 class="navigation-phone">(702) CLICKIT</h2>
            </nav>
        </header>

        <div class="contact-page-banner">
            <div class="contact-page-banner-text">
                <h1>Come check us out <br><span id="contact-span">Get a free consultation today!</span></h1>
            </div>
            <div class="contact-page-id">
                <h3>Contact Us</h3>
                <div class="contact-page-id-box">
                    <i id="down-arrow" class="fas fa-arrow-down"></i>
                </div>
            </div>
        </div>

        <div class="contact-page-info">
            <div class="">
                <h1>Click<span class="orange">it</span> Social:</h1>
                <p><span>Phone:</span> (702) 254-2548</p>
                <p><span>E-mail:</span> Art@clickitsocial.com</p>
                <p><span>Address:</span> 5375, Unit A, Cameron St, Las Vegas, NV 89118</p>
            </div>
            <div id="map">

            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-page-background">
            <div class="contact-page-form-container">
                <form id="contact-page-form" action="">
                    <label for="name">Hi, my name is</label>
                    <input type="text" name="name" placeholder="name">
                    <br>
                    <label for="company">with</label>
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
        </div>
        <footer>
            <div class="footer career-footer">
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
        <script src="scripts/script.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChauaStjusNVHp8rJL9jtZ0vwpx7ODrUs&callback=initMap"async defer></script>
    </body>
</html>
