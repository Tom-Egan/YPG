<!-- ============================================================================|
**** Header Module [1 of 1]                                                      |
****                                                                             |
**** includes/header_navbar.php                                                  |
**** Modified: 24 April 2016                                                     |
**** ============================================================================|
****                                                                |            |
**** Table of Contents (CTRL + F [object_name])                     |   Line #   |
****                                                                |            |
**** [NAVBAR]                                                       |       20   |
**** - [TOP_NAV]                                                    |       23   |
**** - [LOGO_BANNER]                                                |       40   |
**** - [NAME_MOBILE]                                                |       50   |
**** - [HAMBURGER]                                                  |       53   |
**** - [LINKS]                                                      |       62   |
**** - - [DROPDOWN]                                                 |       68   |
****                                                                |            |
**** ============================================================================|
-->

<!-- [NAVBAR] -->
<div class="navbar navbar-inverse navbar-top ypg-navbar">

    <!-- [TOP_NAV] -->
    <div class="navbar nav-contact">
        <!-- top navbar contact details (location, phone, email, facebook, and google plus) -->
        <ul>
            <!-- location -->
            <li><span class="icon-location icons"></span>Mukwonago, Wisconsin</li>
            <!-- phone -->
            <li><span class="icon-phone icons"></span>(262) 470-3829</li>
            <!-- email -->
            <li class="remove-mobile"><span class="icon-email icons "></span>YourPersonalGardenerLLC@gmail.com</li>
            <!-- facebook -->
            <li><a href="https://www.facebook.com/pages/Your-Personal-Gardener-LLC/114144462115014" target="_blank" title="Like YPG on Facebook"><span class="icon-facebook icons facebook-icon"></span></a></li>
            <!-- google+ -->
            <li><a href="https://plus.google.com/108042060288189957057/about" target="_blank" title="Visit YPG on Google+"><span class="icon-googleplus icons google-icon"></span></a></li>
        </ul>
    </div> <!-- end of [TOP_NAV] -->

    <!-- [LOGO_BANNER] -->
    <div class="logo-banner">
        <!-- link back home -->
        <a href="http://yourpersonalgardenerllc.com" title="Return to the YPG homepage"><h1>YOUR <span class="title-green">PERSONAL</span><br><span class="gardener">GARDENER </span></h1>
        <!-- logo -->
        <img src="../images/ypglogo2.png" alt="YPG logo"></a>
        <div class="logo-triangle"></div>
    </div> <!-- end of [LOGO_BANNER] -->


    <!-- [NAME_MOBILE] -->
    <h2>Your<span class="title-green">Personal</span>Gardener</h2>

    <!-- [HAMBURGER] -->
    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
        <!-- These 3 spans create the hamburger icon -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button> 

    <!-- [LINKS] -->
    <div class="collapse navbar-collapse navHeaderCollapse">
        <ul class="nav navbar-nav navbar-right">
            <!-- home -->
            <li><a href="http://yourpersonalgardenerllc.com"     title="Return to the YPG homepage">Home</a></li>
            <!-- about -->
            <li><a href="../about-ypg" title="Learn more about Your Personal Gardener and their story">About</a></li>
            
            <!-- [DROPDOWN] -->
            <li class="dropdown">
                <!-- services -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                    <!-- service list items -->
                    <ul class="dropdown-menu" role="menu">
                        <!-- tree services -->
                        <li><a href="../tree-services" title="Learn more about Your Personal Gardener's tree services">Tree Services</a></li> 
                        <!--landscape -->
                        <li><a href="../landscape" title="Learn more about Your Personal Gardener's landscape services">Landscape</a></li>
                        <!--/lawn and turf -->
                        <li><a href="../lawn-and-turf" title="Learn more about Your Personal Gardener's lawn and turf services">Lawn &amp; Turf</a></li>
                        <!-- hardscape -->
                        <li><a href="../hardscape" title="Learn more about Your Personal Gardener's hardscape services">Hardscape</a></li>
                        <!-- maintenance -->
                        <li><a href="../maintenance" title="Learn more about Your Personal Gardener's maintenance packages">Maintenance Packages</a></li>
                        <!--landscape design -->
                        <li><a href="../landscape-design" title="Learn more about Your Personal Gardener's landscape design services">Landscape Design</a></li>
                        <!-- concrete -->
                        <li><a href="../concrete" title="Learn more about Your Personal Gardener's concrete services">Concrete</a></li>
                        <!-- snow and ice management -->
                        <li><a href="../snow-ice-management" title="Learn more about Your Personal Gardener's snow removal services">Snow &amp; Ice Management</a></li> 
                        <!-- material delivery -->
                        <li><a href="../material-delivery" title="Learn more about Your Personal Gardener's material delivery services">Material Delivery</a></li>
                    </ul>
            </li> <!-- end of [DROPDOWN] -->

            <!-- portfolio -->
            <li><a href="../portfolio.php" title="View past work completed by YPG">Portfolio</a></li>
            <!-- careers -->
            <li><a href="../careers">Careers</a></li>
            <!-- contact -->
            <li><a href="../contact-ypg" title="Get in touch with Your Personal Gardener">Contact</a></li>
        </ul><!--/ end ul -->

    </div><!-- end of [LINKS] -->
</div><!-- end of [NAVBAR] -->