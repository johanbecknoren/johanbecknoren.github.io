<!DOCTYPE HTML>
<html>

<head>
  <title>Contact | Johan Beck-Nor&eacuten</title>
  <meta name="description" content="Portfolio and Information about Johan Beck-Noren, M. Sc. student at LiU, Sweden." />
  <meta name="keywords" content="johan, beck-noren, mt, medieteknik, norrkoping, computer graphics, portfolio, cv, 2014, datografik, simulering, simulation, skydive, fallsk�rm, skydiving" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Johan<span class="logo_colour">Beck-Nor&eacuten</span></a></h1>
          <h2>Developer.Student.Skydiver.</h2>
        </div>
      </div>
	  <div id="header_info_me">
		<p>	<a href="http://www.beck-noren.se">www.beck-noren.se</a><br>
			johan@beck-noren.se<br>
			<a href="http://se.linkedin.com/pub/johan-beck-nor%C3%A9n/4b/5a/760/en" target = "new" style="text-decoration:none;"><span style="font: 80% Arial,sans-serif; color:#0783B6;"><img src="http://www.linkedin.com/img/webpromo/btn_in_20x15.png" width="20" height="15" alt="Visa Johan Beck-Nor�ns profil p� LinkedIn" style="vertical-align:middle" border="0">Johan Beck-Nor&eacutens profile</span></a></p>
	  </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li><a href="index.html">About Me</a></li>
          <!--<li><a href="about.html">About Me</a></li>-->
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="cv.html">CV</a></li>
		  <li><a href="education.html">Education</a></li>
          <!--<li><a href="#">Example Drop Down</a>
            <ul>
              <li><a href="#">Drop Down One</a></li>
              <li><a href="#">Drop Down Two</a>
                <ul>
                  <li><a href="#">Sub Drop Down One</a></li>
                  <li><a href="#">Sub Drop Down Two</a></li>
                  <li><a href="#">Sub Drop Down Three</a></li>
                  <li><a href="#">Sub Drop Down Four</a></li>
                  <li><a href="#">Sub Drop Down Five</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down Three</a></li>
              <li><a href="#">Drop Down Four</a></li>
              <li><a href="#">Drop Down Five</a></li>
            </ul>
          </li>-->
          <li class="selected"><a href="contact.php">Contact Me</a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div id="gallery">
          <ul class="images">
            <li class="show"><img width="300" height="450" src="photos/fire_450_300.png" alt="cloth" /></li>
            <li><img width="300" height="450" src="photos/cloth_wire_450_300.jpg" alt="campus norrkoping" /></li>
            <li><img width="300" height="450" src="photos/moa_fluid_450_300.png" alt="skydive" /></li>
            <li><img width="300" height="450" src="photos/diffusion_450_300.jpg" alt="diffusion dof" /></li>
            <li><img width="300" height="450" src="photos/teapot_bloom_450_300.jpg" alt="hdr_bloom" /></li>
      <li><img width="300" height="450" src="photos/fluid_450_300.jpg" alt="2d fluid sim" /></li>
      <li><img width="300" height="450" src="photos/particles_450_300.jpg" alt="particle simulation" /></li>
          </ul>
        </div>
      </div>
      <div id="content">
        <h1>Contact</h1>
        <p>If you would like to contact me, please use the email address at the top right of the page.</p>
        <!--
        <?php
          // This PHP Contact Form is offered &quot;as is&quot; without warranty of any kind, either expressed or implied.
          // David Carter at www.css3templates.co.uk shall not be liable for any loss or damage arising from, or in any way
          // connected with, your use of, or inability to use, the website templates (even where David Carter has been advised
          // of the possibility of such loss or damage). This includes, without limitation, any damage for loss of profits,
          // loss of information, or any other monetary loss.

          // Set-up these 3 parameters
          // 1. Enter the email address you would like the enquiry sent to
          // 2. Enter the subject of the email you will receive, when someone contacts you
          // 3. Enter the text that you would like the user to see once they submit the contact form
          $to = 'johan.noren@gmail.com';
          $subject = 'Enquiry from the website';
          $contact_submitted = 'Your message has been sent.';

          // Do not amend anything below here, unless you know PHP
          function email_is_valid($email) {
            return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
          }
          if (!email_is_valid($to)) {
            echo '<p style="color: red;">You must set-up a valid (to) email address before this contact page will work.</p>';
          }
          if (isset($_POST['contact_submitted'])) {
            $return = "\r";
            $youremail = trim(htmlspecialchars($_POST['your_email']));
            $yourname = stripslashes(strip_tags($_POST['your_name']));
            $yourmessage = stripslashes(strip_tags($_POST['your_message']));
            $contact_name = "Name: ".$yourname;
            $message_text = "Message: ".$yourmessage;
            $user_answer = trim(htmlspecialchars($_POST['user_answer']));
            $answer = trim(htmlspecialchars($_POST['answer']));
            $message = $contact_name . $return . $message_text;
            $headers = "From: ".$youremail;
            if (email_is_valid($youremail) && !eregi("\r",$youremail) && !eregi("\n",$youremail) && $yourname != "" && $yourmessage != "" && substr(md5($user_answer),5,10) === $answer) {
              mail($to,$subject,$message,$headers);
              $yourname = '';
              $youremail = '';
              $yourmessage = '';
              echo '<p style="color: blue;">'.$contact_submitted.'</p>';
            }
            else echo '<p style="color: red;">Please enter your name, a valid email address, your message and the answer to the simple maths question before sending your message.</p>';
          }
          $number_1 = rand(1, 9);
          $number_2 = rand(1, 9);
          $answer = substr(md5($number_1+$number_2),5,10);
        ?>
        <form id="contact" action="contact.php" method="post">
          <div class="form_settings">
            <p><span>Name</span><input class="contact" type="text" name="your_name" value="<?php echo $yourname; ?>" /></p>
            <p><span>Email Address</span><input class="contact" type="text" name="your_email" value="<?php echo $youremail; ?>" /></p>
            <p><span>Message</span><textarea class="contact textarea" rows="5" cols="50" name="your_message"><?php echo $yourmessage; ?></textarea></p>
            <p style="padding: 10px 0; line-height: 2em;">To help prevent spam, please enter the answer to this question:</p>
            <p><span><?php echo $number_1; ?> + <?php echo $number_2; ?> = ?</span><input type="text" name="user_answer" /><input type="hidden" name="answer" value="<?php echo $answer; ?>" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="send" /></p>
          </div>
        </form>
      </div>
    </div>
    <footer>
    </footer>
  </div>
  -->
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
