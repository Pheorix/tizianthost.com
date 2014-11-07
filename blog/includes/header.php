<?php
    if($_SERVER["HTTPS"] != "on") {
       header("HTTP/1.1 301 Moved Permanently");
       header("Location: https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]);
       exit();
    }
 ?>
<!DOCTYPE html>
<html>

<head>
    <title>@Tizian Thost</title>

    <!-- Meta Tags -->
    <meta charset="ISO-8859-1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link href="images/icons/favicon/favicon.ico" type="image/x-icon" rel="shortcut icon">

    <!--Document Stylesheets -->
    <link rel="stylesheet" href="styles/main.css" type="text/css" />
    <link rel="stylesheet" href="styles/menu.css" type="text/css" />
    <link rel="stylesheet" href="styles/design.css" type="text/css" />
    <link rel="stylesheet" href="styles/forms.css" type="text/css" />
    <link rel="stylesheet" href="styles/pricing.css" type="text/css" />
    
    <!--  Api -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <!-- Jquery Plugin-Stylesheets -->
    <link rel="stylesheet" href="js/css/simpletextrotator.css" type="text/css">
    <link rel="stylesheet" href="js/css/jquery.powertip.css" type="text/css">
    
    <!-- Jquery Plugins-->
    <script src="js/plugins/jquery.mousewheel.js"></script>
    <script src="js/plugins/perfect-scrollbar.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.simple-text-rotator.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.flipping_text.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.powertip.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.vegas.min.js"></script>
    <script type="text/javascript" src="https://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/json2/20110223/json2.js"></script>
    <script type="text/javascript" src="js/plugins/jstorage.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.smoothState.js"></script>

    <!-- Jquery Functions -->
    <script  type="text/javascript" src="js/functions/slogan.js"></script>
    <script  type="text/javascript" src="js/functions/fade.js"></script>
    <script  type="text/javascript" src="js/functions/dropdown_menu.js"></script>
    <script  type="text/javascript" src="js/functions/shake.js"></script>
    <script  type="text/javascript" src="js/functions/fullscreen_msg.js"></script>
    <script  type="text/javascript" src="js/functions/powertip.js"></script> 
    <script type="text/javascript" src="js/functions/smooth.js"></script>
      
</head>
<body>
    <div id="smooth_wrapper">
        <div id="menu">
            <a href="index.php"><div id="slogan"><span class="slogan">Blog</span></div></a> 
        <ul id="navi">       
            <li class="toggle_menu" >
               <a class="toggle_menu" href="#">Thema 1</a>
                <ul class="submenu">
                    <li><a href="about.php">&Uuml;ber mich</a></li>
                    <li><a href="skills.php">Qualifikationen</a></li>
                    <li><a href="#">Portfolio</a></li>
                </ul>
            </li>
            <li class="toggle_menu">
               <a class="toggle_menu" href="#">Thema 2</a>
                <ul class="submenu">
                    <li><a href="webdesign.php">Webdesign</a></li>                    
                    <li><a href="webhosting.php">Webhosting</a></li>
                    <li><a href="webdesign.php">Webentwicklung</a></li> 
                    <li><a href="#">Grafikdesign</a></li>                   
                    <li><a href="#">Administration</a></li>
                    <li><a href="#">IT-Beratung</a></li>
                    <li><a href="#">Seminare</a></li>                    
                </ul>
            </li>
            <li class="menu_item">
                <a href="#" >Thema 3</a>
            </li>
            <li class="menu_item">
               <a href="contact.php">Thema 4</a>
            </li>
        </ul> 
        </div>