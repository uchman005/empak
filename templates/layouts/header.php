<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <base href="<?= domain ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <meta name="description" content="Empak Digital enables Statistics in the Business of Computing, Database Services, Software Programming and Installation for Corporate Bodies, Government Agencies and the Government for Prudence and efficiency.">
    <meta name="keywords" content="Empak Digital, Statistics, Database, Information technology, Business consultation, Enugu ICT, ICT in Nigeria, Marketing digital products">
    <!-- Mobile Specific Metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Favicon
=================================================-->
<link rel="apple-touch-icon" sizes="180x180" href="<?=$assets?>/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?=$assets?>/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=$assets?>/images/favicon/favicon-16x16.png">
<link rel="manifest" href="<?=$assets?>/images/favicon/site.webmanifest">
    <!-- CSS
================================================== -->
    <link rel="stylesheet" href="<?= $assets ?>/css/style.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/colors/green.css" id="colors">
    <script src="https://kit.fontawesome.com/1e8ddd4a45.js" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


</head>

<body>


    <!-- Header
================================================== -->
    <header id="header">

        <!-- Container -->
        <div class="container">

            <!-- Logo / Mobile Menu -->
            <div class="three columns">

                <div id="mobile-navigation">

                    <a href="#menu" class="menu-trigger"><i class="icon-reorder"></i></a>
                </div>

                <div id="logo">
                    <h1><a href="./"><img src="<?= $assets ?>/images/empak.png" alt="Empak logo"></a></h1>
                </div>
            </div>


            <!-- Navigation
================================================== -->
            <div class="thirteen columns">

                <nav id="navigation" class="menu">
                    <ul id="responsive">

                        <li><a href="./" id="<?= $menukey == "home" ? "current" : null ?>">Home</a></li>

                        <li><a href="./about" id="<?= $menukey == "about" ? "current" : null ?>">About us</a>

                        </li>

                        <li><a href="./contact-us" id="<?= $menukey == "contact-us" ? "current" : null ?>">Contact Us</a>
                        </li>

                        <li><a href="./services" id="<?= $menukey == "services" ? "current" : null ?>">Services</a>
                        </li>

                        </li>

                        <!-- Search Form -->


                    </ul>
                </nav>
            </div>

        </div>
        <!-- Container / End -->

    </header>
    <!-- Header / End -->