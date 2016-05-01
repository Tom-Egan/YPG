<!DOCTYPE html>
<html lang="en">

<!--

      Your Personal Gardener, LLC
      Mukwonago, Wisconsin

      Developer: Tom Egan (tom-egan.com)
      Created: May 2014
      Last Modified: 24 April 2016

      Dependencies:
      - - includes/header_navbar.php
      - - includes/footer_links.php
      - - includes/footer_index.php
      - - xml/index_grid.xml

-->

<head>
    <title>Your Personal Gardener of Mukwonago, Wisconsin | Southeast Wisconsin's Premier Design, Build, & Maintain Firm</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.65, maximum-scale=0.65">
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Based out of Mukwonago, Wisconsin, YPG proudly serves the commercial and residential communities of Southeastern Wisconsin with year-round outdoor services.">
    <meta name="keywords" content="landscape, landscaping, garden, hardscape, concrete, lawn, turf, mowing, tree removal, firewood, snow removal, tree cutting, mukwonago, wisconsin">

    <!-- Facebook -->
    <meta property="og:title" content="Your Personal Gardener | Southeast Wisconsin's Premier Design, Build, & Maintain Firm"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://yourpersonalgardenerllc.com/facebook-thumb.png"/>
    <meta property="og:url" content="http://yourpersonalgardenerllc.com"/>
    <meta property="og:description" content="Based out of Mukwonago, Wisconsin, YPG proudly serves the commercial and residential communities of Southeastern Wisconsin with year-round outdoor services."/>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/ypg-styles.css">
    <link rel="stylesheet" href="css/ideal_slider/ideal-image-slider.css">
  <link rel="stylesheet" href="css/ideal_slider/default.css">

    <!-- SlitSlider-->
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <noscript>
        <link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
    </noscript>
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>

    <!-- favicons and touch icons-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
       <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                     <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                     <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-32-precomposed.png">
                                    <link rel="shortcut icon" href="assets/ico/apple-touch-icon-32-precomposed.png">
                                                            <link rel="shortcut icon" href="assets/ico/favicon.png"> 

<style type="text/css">
  .fall-slider-span {
    margin-right: 15px;
    margin-left: 15px;
  }

</style>
</head>

<body>
<!-- load navbar module -->
<?php include 'includes/header_navbar.php'; ?> 

<?php include 'includes/index_slider.php'; ?> 

<!-- [FULL CONTAINER] -->
<div class="container-fluid welcome-bg">
    <!-- [CONTAINER] -->
    <div class="container  welcome-msg  servicefix ">
        <div class="title-border-cover"></div>
        <h1 class="page-title">We <span class="accent"> Love </span>What We Do</h1>
        <br>
        <h3>To Our Clients, Employees, and Community</h3>
        <p>Landscaping is more than a “green industry” or “pulling weeds from the garden” type of job.  Landscaping is <span class="accent-green">inspiring</span>. Landscaping brings the most out of your outdoor experience while sharing it with family, friends, and neighbors. We strive to help you envision your property in a whole new way.  The most enjoyable part of our work is when our vision is transformed into your reality. Seeing you smile for the first time when you come home to see your muddy patch of yard transformed into a <span class="accent-green">unique, eye-catching, and neighbor-asking beauty</span> is the greatest reward.</p>
        <br>
        <p><span class="accent-green">Your Personal Gardener</span> is a company of people that share the same enthusiasm and hard work ethic to <span class="accent-green">meet and exceed your expectations</span>. For the last 7 years, our team has channeled our combined experiences and passion to provide detailed, high quality landscape construction, and landscape maintenance services to the residential and commercial communities of Southeast Wisconsin.</p>
        <br>
        <p>Together we feel very privileged to be a part of your piece of land.</p>
        <img class="img-responsive" src="images/james-sig.png">
        <h3 class="signature">James Chesebro</h3>
        <p>Owner, Your Personal Gardener</p>
    </div> <!--  end of [CONTAINER] -->
</div> <!-- end of [FULL CONTAINER] -->


<!-- [FULL CONTAINER] -->
<div class="container-fluid service-bg">
    <!-- [CONTAINER] -->
    <div class="container services">
        <!-- page title underline -->
        <div class="title-border-cover service-title-border"></div>
        <!-- [TITLE] -->
        <h1 class="page-title service-page-title">Our<span class="accent"> Services</span></h1>

        <!-- [ROW] -->
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10">
            <?php
                // load XML file containing image filenames
                $xml=simplexml_load_file("xml/index_grid.xml") or die("XML Error: Cannot create object");

                // for loop to parse through XML data and pull image paths
                foreach ($xml as $portGrid):

                    // Assign variable $catTitle to XML <title> attribute (category title h3)
                    $catTitle=$portGrid->title;
                    // Assign variable $class_name to XML <inside_div> attribute (CSS class name)
                    $class_name=$portGrid->inside_div;
                    // Assign variable $url to XML <link> attribute (file name)
                    $url=$portGrid->link;

                    // [+1 div] Create container div for nested structure
                    echo "<div class='col-md-4 home-service-outside'>";
                    echo "<div class='home-service-inner ",$class_name,"'>";
                    echo "<a href='",$url,"'>";
                    echo "<div class='parts-hover-overlay'>";
                    echo "<div class='part-hover-text-left'><span class='glyphicon glyphicon-search'></span></div>'";
                    echo "<br>";
                    echo "<div class='part-hover-text-right'><span>View</span></div>";
                    echo "</div>";
                    echo "</a>";
                    echo "</div>";
                    echo "<div class='grid_title_card'>";
                    echo "<h3>",$catTitle,"</h3>";
                    echo "<div class='go-to-link'>";
                    echo "<a href='",$url,"'>";
                    echo "<span class='glyphicon glyphicon-chevron-right'></span>";
                    echo "</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                // end of for loop
                endforeach;
            ?>
            </div>

            <div class="col-md-1"></div>

        </div> <!--    end of [ROW] -->        
    </div> <!--  end of [CONTAINER] -->
</div> <!-- end of [FULL CONTAINER] -->

<!-- [SLOGAN] -->
<div class="container-fluid slogan">
    <h1>Design. <span class="title-green">Build.</span> Maintain.</h1>
</div>

<!-- load testimonials module -->
<?php include 'includes/index_testimonials.php'; ?>

<!-- load footer modules -->
<?php include 'includes/footer_links.php'; ?>
<?php include 'includes/footer_index.php'; ?>