<!DOCTYPE html>
<html lang="en">

<!--

      Your Personal Gardener, LLC
      Mukwonago, Wisconsin

      Developer: Tom Egan (tom-egan.com)
      Created: May 2014
      Last Modified: 30 April 2016

      Dependencies:
      - - includes/header_navbar_portfolio.php
      - - includes/footer_links_portfolio.php
      - - includes/footer_lightbox.php
      - - xml/portfolio_grid.xml

-->

<head>
    <title>Portfolio | Your Personal Gardener</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.65, maximum-scale=0.65">
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Based out of Mukwonago, Wisconsin, YPG proudly serves the commercial and residential communities of Southeastern Wisconsin with year-round outdoor services.">
    <meta name="keywords" content="landscape, landscaping, garden, hardscape, concrete, lawn, turf, mowing, tree removal, firewood, snow removal, tree cutting, mukwonago, wisconsin">

    <!-- Facebook -->
    <meta property="og:title" content="Your Personal Gardener | Southeast Wisconsin's Premier Design, Build, &amp; Maintain Firm"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="http://yourpersonalgardenerllc.com/facebook-thumb.png"/>
    <meta property="og:url" content="http://yourpersonalgardenerllc.com"/>
    <meta property="og:description" content="Based out of Mukwonago, Wisconsin, YPG proudly serves the commercial and residential communities of Southeastern Wisconsin with year-round outdoor services."/>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Norican" />
    <!-- CSS Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.min.css">
    <link rel="stylesheet" href="../css/lightbox.css" />

    <!-- favicons and touch icons-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
       <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                     <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                     <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-32-precomposed.png">
                                    <link rel="shortcut icon" href="../assets/ico/apple-touch-icon-32-precomposed.png">
                                                            <link rel="shortcut icon" href="../assets/ico/favicon.png"> 
</head>

<body>
<!-- load navbar module -->
<?php include '../includes/header_navbar_portfolio.php'; ?>

<div class="container-fluid subpage-header portfolio-header">
  <div class="container subpage-title-fix">
   <h1 class="page-title subpage-title ">Portfolio</h1>
  </div>
</div>
</div>
<div class="container-fluid  portfolio_bg subpage-wrap">
    <!-- BEGIN "PORTFOLIO- VIEW ALL" -->
    <div class="container services subpage-body">
        <!-- page header -->
        <div class="row">

        </div>

        <!-- Row 1 - Featured Property and Landscape -->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <?php
                // load XML file containing image filenames
                $xml=simplexml_load_file("../xml/portfolio_grid.xml") or die("XML Error: Cannot create object");

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
        </div> <!--/ end row 3 -->
    </div> <!--/end body container -->
</div>
 
<?php include '../includes/footer_links_portfolio.php'; ?>
<?php include '../includes/footer_lightbox.php'; ?>