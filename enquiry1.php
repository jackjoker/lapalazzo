<?php

  
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Enquiry - La Palazzo</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
		
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
    </head>
    <body onLoad="initialize_map()">
    
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

     
            <div class="navbar navbar-inverse navbar-fixed-top">             
      
                <div class="navbar-inner">
                  		  
                        <div class="container">
                          
                      <!--  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>-->
                        
                        <a class="brand" href="index.html"> <img src="img/logo.png"> </a>
                        
                        
                        <div id="nav_main" class="nav-list pull-right">
                        
                            <ul class="nav">
                                <li><a href="residences.html">RESIDENCES</a></li>
                                <li><a href="master_plan.html">PLANS</a></li>
                                <li><a href="features.html">FEATURES</a></li>
                                <li><a href="about.html">KMB GROUP</a></li>
                                <li class=""><a href="faq-generic.html">FAQ</a></li>
                                <li class="always_active"><a href="enquiry.php">ENQUIRY</a></li>
                            </ul>
                            
                        </div><!--/.nav-collapse -->
                           
                    </div><!-- /container -->
                                            
       			</div>
        
            </div>
            
            <div id="page_content" class="container">
            <div class="row">
            	<div class="span3" id="enquiry1">

                <h3 class="page_heading" id="enq_heading" style="">ENQUIRY</h3> 

                <p class="con_info"> <a href="javascript:" onclick="history.go(-1)"> CONTACT INFORMATION  <img src="img/plus.png"> </a>
                </p>
    
                <div id="privacy">PRIVACY:</br>
We promise to keep all the provided data confidential.</br>
By signing up, you agree to receive </br>
basic information about La Palazzo.
</div>
                </div>
                 
                <div class="span9" id="enquiry2">
                <div class="row">
                <div class="span9" id="txt2" >
                <p id="text1"><span id="thanku">THANK YOU</span></br></br>You will receive a call from one of our executives within the next 24 hours</p>
                </div>
                </div>
        
              </div>
              </div>

              </div>
              
             <div id="footer" class="container">
            	<div class="row">
                	
                	<div id="footer_kmb" class="span2" style="margin-left:0">
                    	<a href="http://kmbgroup.in/" target="_blank"><img src="img/kmb.png"></a>                      
                    </div>
					
                    <div id="footer_links" class="span4">
                        <a href="faq-generic.html?"> FAQ </a> | 
                        <a href="general.html?p=gen_privacy" class="" data-link="gen_privacy"> PRIVACY </a>  |
                        <a href="general.html?p=gen_terms_cond" data-link="gen_terms_cond"> TERMS &amp; CONDITIONS </a> | 
                        <a href="general.html?p=gen_disclaimer" data-link="gen_disclaimer"> DISCLAIMER </a> | <a href="sitemap.html"> SITE MAP</a> 
                    </div>
                    
                   <div class="span3" id="footer_logos">
                        <a target='_blank' href="http://www.credai.org/" id="lnk_credai"> </a>
                        <a target='_blank' href="http://www.fiabci.org/" id="lnk_fiabci"> </a>
                        <a target='_blank' href="http://www.igbc.in/site/igbc/index.jsp" id="lnk_green"> </a>
                    	<img src="img/footer_logos.png">                       
                    </div>
                    
                    <div id="footer_contact" class="span3 pull-right">
                    	<img src="img/footer_contact.png" class="ft_ct_img_bg">
                        <div id="ft_cnt">	
                        	<p  style="margin-bottom:0; padding-bottom:3px;">
                            &nbsp;<img src="img/phone-icon.png">&nbsp; <span> +91 93411 12343 </span>
                            </p>
                            <p style="margin-top:0; padding-top:0;">
	                            <img src="img/mail-icon.png">&nbsp; <span> <a href="mailto:lapalazzo@kmbestates.com">lapalazzo@kmbestates.com</a></span>
                            </p>
                        </div>
                    </div>
                    
                </div>
                
                <div id="footer_copyrights">
	                <span>All rights reserved 2013  KMB Estates LLP | La Palazzo is a KMB Group Property</span>
                </div>
            </div>
    
		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
		
        
        <script src="js/jquery.validate.min.js"></script>

        <script src="js/main.js"></script>

        <script type="text/javascript">
         
		
		 jQuery.validator.messages.required = "";
         $("#enquiry_form").validate({

          invalidHandler: function(e, validator) {
            
            var errors = validator.numberOfInvalids();
            
            if (errors) {
              var message = errors == 1
                ? 'Please fill in the highlighted fields'
                : 'Please fill in the highlighted fields';
              $("div.form_error").html(message);
              $("div.form_error").show();
            } else {
              $("div.form_error").hide();
            }
          },

          onkeyup: false

        });


        </script>	
        
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39325239-1', 'lapalazzo.in');
  ga('send', 'pageview');

</script>
    </body>
</html>
