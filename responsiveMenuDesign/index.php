<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Responsive Menu</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>

        <header>
        <div class="inner-width">
            <a href="#" class="logo">
            <img src="logo.png" alt="logo">
            </a>

            <i class="menu-toggle-btn fas fa-bars"></i>
            <nav class="navigation-menu">
                <a href="#"><i class="fas fa-home home"></i> Home</a>
                <a href="#"><i class="fas fa-align-left about"></i> About</a>
                <a href="#"><i class="fab fa-buffer works"></i> Works</a>
                <a href="#"><i class="fas fa-users team"></i> Team</a>
                <a href="#"><i class="fas fa-headset contact"></i> Contact</a>
            </nav>
        </div>
        </header>

        <script type="text/javascript">
    $(".menu-toggle-btn").click(function(){
            $(this).toggleClass("fa-times");
            $(".navigation-menu").toggleClass("active");
    });

    </script>
    </body>
</html>