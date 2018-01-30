
<!DOCTYPE html>
<html>
    <head>        
        <!--META TAGS NAME TITLE ETC-->
        <title>Gregorio Antonino - Photographer</title>
        <meta name="description" content="Welcome! My name is Gregorio Antonino. I'm a photographer from Buenos Aires, Argentina. This is my online portfolio. I invite you to visit and enjoy the images I love capturing.">
        <meta name="keywords" content="photography,fotografia,autor,portfolio,Gregorio Antonino,street photography,street,fotografia callejera,art,gregorio,antonino,fotografo,photographer,fine art,buenos aires">
        <meta name="author" content="Gregorio Antonino">
        <meta name="copyright" content="Gregorio Antonino - 2017">
        <meta name="email" content="info@gregorioantonino.com">
        <meta name="Charset" content="UTF-8">
        <meta name="Robots" content="INDEX,FOLLOW">
        <meta name="Revisit-after" content="7 Days">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--//FAVICONS & ICONS-->
        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
        <link rel="manifest" href="favicons/manifest.json">
        <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">
        
        <!--reCaptcha Script-->
        <script src='https://www.google.com/recaptcha/api.js'></script>
        
        <script> //Google Analytics
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-105579583-1', 'auto');
          ga('send', 'pageview');

        </script>
        
        <!-- JQuery Script-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 

        <!--BOOTSTRAP Style & Script-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        
        <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        
        <?php include 'createthumbs.php';?>
        
        <!--Style CSS & Fonts-->
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

        
        <!--Lightbox-->
        <link href="css/lightbox.css" rel="stylesheet">
        <script src="js/lightbox.js"></script>
   
        
    </head>

<body>
    
    <nav class="header-bar" data-spy="affix"> <!--Header Bar-->
        
        <div>
            <h1>GREGORIO ANTONINO</h1>
        </div>
        
        <div> <!--Navigation Buttons Bar-->
            <ul class="h-nav">
                <li class="h-nav-li"><a class="h-nav-a" href="index.php">Home</a></li>
                <li class="h-nav-li"><a class="h-nav-a" href="#about">About</a></li>
                <li class="h-nav-li"><a class="h-nav-a" href="#contact">Contact</a></li>
                <li class="h-nav-li"><a class="h-nav-a" href="buy_prints.php">Order Prints</a></li>
            </ul>
        </div>
    </nav>

    <div class="relative-cont text-center">
        <p>WORK IN PROGRESS</p>
        <br>
        <p>Please send me your print inquiry by filling this form and I'll get back to you. Thank You!</p>
        <br>
        <form action="mail.php" method="POST" target="msgbox">
            <p>Name</p><input type="text"  name="name">
            <div class="separator10px"></div>
            <p>Email</p><input type="text" name="email">
            <div class="separator10px"></div>
            <p>Message - Please detail print title</p><textarea name="message" rows="6" cols="100"></textarea><br />
            <div class="separator10px"></div>
            <input class="contactme" type="submit" value="Send" onClick="_ga(['send', 'event', 'form', 'click_submit'])"><input class="contactme" type="reset" value="Clear">
            <div id="captcha">
                 <div align="center" class="g-recaptcha" data-sitekey="6LfVO0AUAAAAADzkoPT2Lcy4cBUzcVGpV7BlAdvB"></div>
            </div>
           
        </form>
        
        <div id="msgbox" class="messageframe" name="thankyouframe"></div>
        
    </div>
        
</body>
</html>
