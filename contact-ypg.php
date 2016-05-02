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
      - - includes/footer_awards.php

-->

<head>
    <title>Contact | Your Personal Gardener of Mukwonago, Wisconsin</title>

    <meta charset="utf-8">
    <meta name="author" content="Tom Egan">
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.min.css">

    <!-- favicons and touch icons-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
       <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                     <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                     <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-32-precomposed.png">
                                    <link rel="shortcut icon" href="assets/ico/apple-touch-icon-32-precomposed.png">
                                                            <link rel="shortcut icon" href="assets/ico/favicon.png"> 

    <script type="text/javascript">
  // Format phone number script
  function doFormatPhone(A){
    var B=document.getElementById(A);

    B.onblur=function(){
        formatPhone(this)
    }
  }

  function formatPhone(A){
    A.value=formatPhoneStr(A.value)

  }

  function formatPhoneStr(A){
    var C=A.replace(/[^0-9xX]/g,"");
    C=C.replace(/[xX]/g,"x");
    var B="";

    if(C.indexOf("x")>-1){
      B=" "+C.substr(C.indexOf("x"));
      C=C.substr(0,C.indexOf("x"))
    } 

    switch(C.length){
      case (10):return C.replace(/(...)(...)(....)/g,"($1) $2-$3")+B;
      case (11):if(C.substr(0,1)=="1"){
          return C.substr(1).replace(/(...)(...)(....)/g,"($1) $2-$3")+B
      }

      break;

      default:

    }

    return A

  }

  window.onload=function(){
    doFormatPhone("phone")
  };
  </script>
</head>

<body>

<!-- load navbar module -->
<?php include 'includes/header_navbar.php'; ?> 

<div class="container-fluid subpage-header contact-header">
    <div class="container subpage-title-fix">
        <h1 class="page-title subpage-title">Contact</h1>
    </div>
</div>

<div class="container-fluid subpage-wrap">
<!-- BEGIN "OUR SERVICES" -->
<div class="container subpage-body">
    <!-- BEGIN ROW 1 -->
    <div class="row">
        <div class="col-md-4 subpage-text contact-header-fix">

            <ul class="contact-page-icons">
                <li><span class="icon-location icons"></span>Mukwonago, Wisconsin</li>
                <li><span class="icon-phone icons"></span>(262) 470-3829</li>
                <li><span class="icon-email icons"></span>YourPersonalGardenerLLC@gmail.com</li>
                <li><span class="icon-facebook icons"></span><a href="https://www.facebook.com/pages/Your-Personal-Gardener-LLC/114144462115014" target="_blank" title="Like YPG on Facebook">Facebook</a></li>
                <li><span class="icon-googleplus icons"></span><a href="https://plus.google.com/108042060288189957057/about" target="_blank" title="Visit YPG on Google+">Google+</a></li>
            </ul>
            <br><br>
        </div>

        <div class="col-md-1">
        </div>

        <div class="col-md-7 subpage-text contact-header-fix">

           <h2>Send Us a Message</h2>
        <div class="subpage-heading-border"></div>
                    <?php
        // Attention! Please read the following.
        // It is important you do not edit pieces of code that aren't tagged as a configurable options identified by the following:

        // Configuration option.

        // Each option that is easily editable has a modified example given.


        $error    = '';
        $name   = '';
        $email    = '';
        $phone  = '';
        $comments = '';
        $verify   = '';
        $subject = '';

        if(isset($_POST['contactus'])) {

        $name   = $_POST['name'];
        $email    = $_POST['email'];
        $phone  = $_POST['phone'];
        $heard = join(", ", $_REQUEST["heard"]);
        $job = join(", ", $_REQUEST["job"]);
        $comments = $_POST['comments'];
        $verify   = $_POST['verify'];
        $subject = $_POST['subject'];


        // Configuration option.
        // You may change the error messages below.
        // e.g. $error = 'Attention! This is a customised error message!';

        if(trim($name) == '') {
          $error = '<div class="error_message">* You must enter your name.</div>';
        } else if(trim($email) == '') {
          $error = '<div class="error_message">* Please enter a valid email address.</div>';

        // Configuration option.
        // Remove the // tags below to active phone number.
        } else if(!formatPhoneNumber($phone)) {
          $error = '<div class="error_message">* Phone number can only contain digits.</div>';

        } else if(!isEmail($email)) {
          $error = '<div class="error_message">* You have enter an invalid e-mail address, try again.</div>';
        }

        if(trim($comments) == '') {
          $error = '<div class="error_message">* Please enter your message.</div>';
        } else if(trim($verify) == '') {
          $error = '<div class="error_message">* Please enter the verification number.</div>';
        } else if(trim($verify) != '4') {
          $error = '<div class="error_message">* The verification number you entered is incorrect.</div>';
        }

        if($error == '') {

          if(get_magic_quotes_gpc()) {
            $comments = stripslashes($comments);
          }


        // Configuration option.
        // Enter the email address that you want to emails to be sent to.
        // Example $address = "joe.doe@yourdomain.com";

        $address = "info@YourPersonalGardenerLLC.com";
        



        // Configuration option.
        // i.e. The standard subject will appear as, "You've been contacted by John Doe."

        // Example, $e_subject = '$name . ' has contacted you via Your Website.';

        $e_subject = '* New YPG Message From ' . $name . '.';


        // Configuration option.
        // You can change this if you feel that you need to.
        // Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

        $e_body = "$name has contacted YPG, inquiring about our ($job) services. \n\nTheir message reads:\n\n";
        $e_content = " $comments \n\nThis customer found out about YPG through ($heard) \n";

        // Configuration option.
        // RIf you active phone number, swap the tags of $e-reply below to include phone number.
        //$e_reply = "You can contact $name via email, $email or via phone $phone";
        $e_reply = "You can contact $name via email ($email), or via telephone $phone.";

        $msg = $e_body . $e_content . $e_reply;

        if(mail($address, $e_subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n"))
        {
          // Email has sent successfully, echo a success page.

           echo "<div id='succsess_page'>";
           echo "<div id='check-mark-div'>";
           echo "<h3><span class='glyphicon glyphicon-ok message-sent-check'></span> Message Sent.</h3>";
           echo "</div>";
           echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
           echo "</div>";
         } else echo "Error. Mail not sent";

        }
      }

        if(!isset($_POST['contactus']) || $error != '') // Do not edit.
        {
    ?>


<?php echo $error; ?>

      <fieldset>

      <p>Please call <span class="accent-green">(262) 470-3829 </span> if you do not receive a response within 48 hours.</p>
      <br>

      <form method="post" action="">
      <!-- Name --> 
      <span class="required-alert"> * Required</span>
      <div class="contact-nameplate form-group">
          <p>Name</p>
          <input name="name" type="text" id="name" size="30" placeholder="Enter your name" value="<?php echo $name; ?>" required/>
      </div>
      <span class="required-alert">* Required</span>
      <!-- Email --> 
      <div class="contact-phone form-group">
          <p>Email</p>
          <input name="email" type="text" id="email" size="30" placeholder="Enter your email"value="<?php echo $email; ?>" />
      </div>
      <span class="required-alert">* Required </span>
      <!-- Phone --> 
      <div class="contact-phone form-group">
          <p class="format">Phone</p>
          <input name="phone" type="text" id="phone" class="format" size="30" placeholder="Enter your phone number"value="<?php echo $phone; ?>" />
      </div>
      <!-- Job Inquiry Checkbox -->  
      <div class="contact-job form-group">
          <p>Job Inquiry</p>

              <div class="checkbox-left">
                  <input type="checkbox"  name="job[]" type="checkbox" value="Concrete" id="concrete">
                  <label for="Concrete">Concrete</label>
                  <br>

                  <input type="checkbox"  name="job[]" type="checkbox" value="Hardscape" id="hardscape">
                  <label for="Hardscape">Hardscape</label>
                  <br>

                  <input type="checkbox"  name="job[]" type="checkbox" value="Landscape" id="landscape">
                  <label for="Landscape">Landscape</label>

                  <br>

                  <input type="checkbox"  name="job[]" type="checkbox" value="Landscape Design" id="design">
                  <label for="Design">Landscape Design</label>

                  <br>

                  <input type="checkbox"  name="job[]" type="checkbox" value="Lawn & Turf" id="lawn">
                  <label for="Lawn">Lawn & Turf</label>
                  
              </div>

              <div class="checkbox-right">
                  <input type="checkbox"  name="job[]" type="checkbox" value="Maintenance Package(s)" id="maintenance">
                  <label for="Maintenance">Maintenance Package</label>
                  <br>
                  <input type="checkbox"  name="job[]" type="checkbox" value="Material Delivery" id="delivery">
                  <label for="Material">Material Delivery</label>

                  <br>

                  <input type="checkbox"  name="job[]" type="checkbox" value="Snow Removal" id="snow">
                  <label for="Snow">Snow Removal</label>

                  <br>

                  <input type="checkbox"  name="job[]" type="checkbox" value="Spring/Fall Cleanup" id="cleanup">
                  <label for="Cleanup">Spring/Fall Cleanup</label>

                  <br>

                  <input type="checkbox"  name="job[]" type="checkbox" value="Tree Service" id="tree" >
                  <label for="Tree">Tree Service</label>
              </div>
      </div> <!--/ end job inquiry -->

      <div class="contact-hear form-group">
            <p>How Did You <br>Hear About Us?</p>
                <div class="checkbox-hear">
                    <input type="checkbox"  name="heard[]" type="checkbox" value="a search engine" id="searchengine">
                    <label for="searchengine">I found you through a search engine.</label>

                    <br>

                    <input type="checkbox"  name="heard[]" type="checkbox" value="social media" id="social">
                    <label for="social">I heard about you through a social media network.</label>

                    <br>

                    <input type="checkbox"  name="heard[]" type="checkbox" value="a family member/friend referral" id="refer">
                    <label for="refer">A family member/friend referred me.</label>

                    <br>

                    <input type="checkbox"  name="heard[]" type="checkbox" value="saw your truck(s)" id="truck">
                    <label for="truck">I saw your truck(s).</label>

                    <br>

                    <input type="checkbox"  name="heard[]" type="checkbox" value="saw your advertisement" id="ad">
                    <label for="ad">I saw your advertisement.</label>

                    <br>

                    <input type="checkbox"  name="heard[]" type="checkbox" value="'other'" id="other">
                    <label for="other">Other</label>
                </div>
        </div> <!--/ end how you heard about us -->
        <span class="required-alert"> * Required</span>
        <div class="contact-message form-group">
            <p>Message</p>
            <textarea name="comments" placeholder="Enter your message" cols="40" rows="3" id="comments"><?php echo $comments; ?></textarea>                              
        </div> <!--/ end message area -->
        <span class="required-alert"> * Required</span>
        <div class="spam-val">
          <label for=verify accesskey=V>&nbsp;&nbsp;&nbsp;<span class="anti-spam">(Anti-spam)</span> 3 + 1 =</label>
          <input name="verify" type="text" id="verify" size="4" value="<?php echo $verify; ?>" /><br /><br />

        </div>

        <button type="submit" id="feedbackSubmit contactus" name="contactus" class="btn btn-primary btn-lg pull-right send-btn submit" style="display: block; margin-top: 10px;">SEND MESSAGE</button>

      </form>

      </fieldset>

<?php }

function isEmail($email) { // Email address verification, do not edit.
return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

function formatPhoneNumber($phone) {
    $phoneNumber = preg_replace('/[^0-9]/','',$phone);

    if(strlen($phone) > 10) {
        $countryCode = substr($phoneNumber, 0, strlen($phone)-10);
        $areaCode = substr($phone, -10, 3);
        $nextThree = substr($phone, -7, 3);
        $lastFour = substr($phone, -4, 4);

        $phone = '+'.$countryCode.' ('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phone) == 10) {
        $areaCode = substr($phone, 0, 3);
        $nextThree = substr($phone, 3, 3);
        $lastFour = substr($phone, 6, 4);

        $phone = '('.$areaCode.') '.$nextThree.'-'.$lastFour;
    }
    else if(strlen($phone) == 7) {
        $nextThree = substr($phone, 0, 3);
        $lastFour = substr($phone, 3, 4);

        $phone = $nextThree.'-'.$lastFour;
    }

    return $phone;
}

?>

    </div>
            <br><br>
        </div> 
     
    </div> <!--/end row 1 -->

</div> <!--/end "about" container -->
</div>


<!-- load footer modules -->
<?php include 'includes/footer_links.php'; ?>
<?php include 'includes/footer_awards.php'; ?>