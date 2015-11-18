
<html>

<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="../style/main.css" />
</head>

<body>

<section id="page-wrapper">

    <header>
        <section id="header-wrapper">

            <div class = "header-left">
                <p class = header-text>Tel: <br> 07539 478358</p>
            </div>

            <div class = "header-center">
                <img src="../images/logotransparentsmall.png" />
            </div>

            <div class = "header-right">
                <p class = header-text>Email: dunchaul@aol.com</p>
            </div>

        </section>

        <div id="sliderGallery" class="shadow">
            <img src="../images/slidingmenu/4.jpg" />
            <img src="../images/slidingmenu/3.jpg"  />
            <img src="../images/slidingmenu/2.jpg"/>
            <img src="../images/slidingmenu/1.jpg" />
        </div>

        <nav class = "nav-wrapper">
            <ul class = "nav-wrapper">
                <li><a href="../index.php" <?php if($pageCat == "index") echo 'style="color:#3dbbf8;"' ?>>HOME</a></li>
                <li><a href="../aboutus.php" <?php if($pageCat == "about us") echo 'style="color:#3dbbf8;"' ?>>ABOUT US</a></li>
                <li><a href="../services.php" <?php if($pageCat == "services") echo 'style="color:#3dbbf8;"' ?>>SERVICES</a></li>
                <li><a href="../theteam.php" <?php if($pageCat == "the team") echo 'style="color:#3dbbf8;"' ?>>THE TEAM</a></li>
                <li><a href="../ourpartners.php" <?php if($pageCat == "our partners") echo 'style="color:#3dbbf8;"' ?>>OUR PARTNERS</a></li>
                <li><a href="../contactus.php" <?php if($pageCat == "contact us") echo 'style="color:#3dbbf8;"' ?>>CONTACT US</a></li>
            </ul>
            <a href="#" id="pull">Menu</a>
        </nav>
    </header>

    <!-- Start of main section for this page -->
    <section class = "content-wrapper">
