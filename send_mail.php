<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact - Kryptonite Supplements</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="css/main.css?sdf=234">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

        <style type="text/css">
        #main_container{
            background: url('img/bg1.jpg') center no-repeat;
            background-size: cover;
        }
        </style>
    </head>
    <body>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="social_media_links">
          <a href="https://www.facebook.com/kryptonitesupplementsltd" target="_blank"><img src="img/fb.png">
          <a href="https://twitter.com/ilovekryptonite" target="_blank"><img src="img/tw.png">
        </div>
    
        <div id="main_nav">
            
            <div id="nav_logo" class="col-md-3">
                <a href="index.html"><img src="img/logo_white.png" class="img-responsive"></a>
            </div>

            <div id="nav_cnt">
                    <ul id="nav_list" class="">
                         <li class="">
                             <a href="about.html"> <img src="img/nav/about.png"> </a>
                        </li>

                        <li class="">
                            <a href="index.html"> <img src="img/nav/products.png"> </a>
                        </li>

                        <li class="">
                            <a href="nutrition.html"> <img src="img/nav/nutrition.png"> </a>
                        </li>
                        <li class="">
                             <a href="training.html"> <img src="img/nav/training.png"> </a>
                        </li>
                        <li class="">
                            <a href="transformation.html"> <img src="img/nav/transformation.png"> </a>
                        </li>
                        
                        <li class="">
                             <a href="contact.html"> <img src="img/nav/contact.png"> </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

       
        <div id="nav_icon">
          <span class="nav_txt"> MENU </span>
           <a class="navicon-button x">
                <div class="navicon"></div>
            </a>
        </div>        
        
        <div id="logo" class="col-md-3">
            <a href="index.html"><img src="img/logo.png" class="img-responsive"></a>
        </div>

        <div id="main_container" class="container-fluid">
                    <div style="position:absolute; width:100%; height:100%; background:#111; background:rgba(0,0,0,0.7)"></div>

                    <div class="content_holder" style="padding-bottom:100px;">
                        <div class="pdt_title col-md-8 regular center-block">
                            <div class="pdt_img_cnt">
                                <img src="img/contact.png" class="img-responsive">

                                <div class="text_block_top col-md-12 center-block">
                                    <h3>
                                         KRYPTONITE SUPPLEMENTS LIMITED
                                    </h3>
                                </div>

                                <div class="text_block_top_2 col-md-12 text_justify center-block">
                                   <div class="col-md-6">
                                    <p style="color:#999; padding-top:20px; margin-top:0;">
                                    
                                     C/o Alexander-Churchill LLP<br>
                                     Brandon House<br>
                                     90 The Broadway<br>
                                     Chesham<br>
                                     Buckinghamshire<br>
                                     England<br>
                                     HP5 1EG<br><br>

                                     Company No. 08578652</br></br>
                                     Tel - +44 (0) 7411 680003</br>
                                     Email - info@ilovekryptonite.com

                                    </p>

                                   </div>

                                   <div class="col-md-6">
                                        <div class="contact-form" style="padding-top:20px; margin-top:0;">
                     
                                         <?php

                                                                  
                                                                   
                                          function sendHTMLemail($HTML,$from,$to,$subject)
                                          {
                                              
                                          // First we have to build our email headers
                                          // Set out "from" address
                                          
                                              $headers = "From: $from\r\n"; 
                                          
                                          // Now we specify our MIME version
                                          
                                              $headers .= "MIME-Version: 1.0\r\n"; 
                                          
                                          // Create a boundary so we know where to look for
                                          // the start of the data

                                          $boundary = uniqid("HTMLEMAIL");

                                          // First we be nice and send a non-html version of our email
                                              
                                          $headers .= "Content-Type: multipart/alternative;".
                                                          "boundary = $boundary\r\n\r\n"; 

                                          $headers .= "This is a MIME encoded message.\r\n\r\n"; 
                                          
                                          $headers .= "--$boundary\r\n".
                                                          "Content-Type: text/plain; charset=ISO-8859-1\r\n".
                                                          "Content-Transfer-Encoding: base64\r\n\r\n"; 

                                          $headers .= "Message-ID: <".date("Ymd")." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
                                             $headers .= "X-Mailer: PHP v".phpversion()."\r\n";     

                                             $headers .= chunk_split(base64_encode(strip_tags($HTML))); 
                                          
                                          // Now we attach the HTML version
                                          
                                              $headers .= "--$boundary\r\n".
                                                          "Content-Type: text/html; charset=ISO-8859-1\r\n".
                                                          "Content-Transfer-Encoding: base64\r\n\r\n"; 
                                               
                                              $headers .= chunk_split(base64_encode($HTML)); 
                                          
                                          // And then send the email ....
                                          
                                          $sent = mail($to,$subject,"",$headers);
                                          
                                          if($sent)
                                           echo "<h2>Your message was sent! Thanks for your time. We will get back to you very soon.</h2>";

                                              else
                                              echo '<h2>Error submitting</h2>';
                                              
                                          }
                                          
                                                                  $name =  $_POST ['name'] ;
                                                                  
                                                                  $contact =$_POST [ 'phone' ];
                                                                  $email = $_POST ['email'] ;
                                                                  $msg = $_POST ['message'] ;
                                                          
                                                                
                               $HTML         = '<table cellspacing="0" cellpadding="8" border="0" width="600" style="background:#EEE">
                                          
                                                              
                                                  <tr>
                                                  <td>Enquiry</td>
                                                  <td></td>
                                                  </tr>
                                                  
                                                  <tr>
                                                  <td>Senders Name:</td>
                                                  <td>'.$name.'</td>
                                                  </tr>
                                                  
                                                  
                                                  
                                                  <tr>
                                                  <td>Contact Number:</td>
                                                  <td>'.$contact.'</td>
                                                  </tr>
                                     
                                                  <tr>
                                                  <td>Email ID :</td>
                                                  <td>'.$email.'</td>
                                                  </tr>
                                                  
                                                          
                                                  <tr>
                                                  <td>Message:</td>
                                                  <td>'.$msg.'</td>
                                                  </tr>

                                                  </table>';
                                                  
                                              

                                         $from = "Kryptonite Website<info@ilovekryptonite.com>";
                                          $to = "amantandon87@gmail.com";
                                          $subject = "Enquiry by ".$name;
                                        
                                          
                                          
                                          sendHTMLemail($HTML,$from,$to,$subject);
                                          
                                          
                                           
                                         
                                   ?>
                                        </div>
                                 
                                   </div>
                                </div>

                            </div>
                            <!-- <div class="top_text">
                               
                            </div> -->
                        </div> 
                    </div>
               
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script type="text/javascript">

        main_nav();
       // hover_parallax();

        </script>

        <script src="js/jquery.validate.min.js"></script>
        <script type="text/javascript">
        $(function(){
            
            $('#contactform').validate();
            
        });
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
