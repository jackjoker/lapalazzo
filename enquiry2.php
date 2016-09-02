1#!K7}Bm&WJp
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
        <link rel="stylesheet" href="css/res_slides.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="js/vendor/magnific/magnific-popup.css">
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
                                <li><a href="faq-generic.html">FAQ</a></li>
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

                 <p class="con_info">  CONTACT INFORMATION
                 </p>
                 
                 <p  class="con_info">
                 PERSONAL INFORMATION
                 </p>

                 <p  class="con_info active">PRICE CALCULATOR</span></p>

                    <div id="privacy">PRIVACY:</br>
                    We promise to keep all the provided data confidential.</br>
                    By signing up, you agree to receive </br>
                    basic information about La Palazzo.
                    </div>
                </div>
                 
                <div class="span9" id="enquiry2">
                <div class="row">
                <div class="span9" id="txt2" >
                <p id="text">To instantly calculate an approximate price, fill in the following details</p>
                </div>
                </div>
                
                <div class="row">
                
            <div class="contact-form" style="position:relative;z-index:2;">
            
            <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="post" name="contactform" id="enquiry_form">
        	       
                   <input type=hidden name="oid" value="00D90000000kxJZ">
                   <input type=hidden name="retURL" value="">

                  <div class="span3" >

                  <span>Apartment Type</span>

                  <select  name="apartment" id="apartment" class="required select_txt">

                      <option value=""><font>I want a</font></option>
                      <option value="3bhk"><font>3 BHK </font></option>
                      <option value="3bhkf"><font>3 BHK + Family </font></option>
                      <option value="4bhkf"><font> 4 BHK + Family </font></option>
                      <option value="4bhkfsd"><font>4 BHK + Family + Study - Duplex </font></option>

                  </select>
              
            </br>

            <span>Facing</span>
                    
                    <select  name="facing" id="facing" class="required select_txt">
                       <!--  <option value=""><font>- Select - </font></option>
                        <option value="east"><font>East</font></option>
                        <option value="west"><font>West</font></option> -->
                    </select>

            </br>
            
            <span>Floor Rise</span>
                    
                    <select  name="floor" id="floor" class="required select_txt">
                      
                    </select>
                    
                  </div>
                  
                <div class="row" ><div class="span9" id="txt2">
                
                <input type="hidden" name="hid_apt_type" id="hid_apt_type">
                <input type="hidden" name="hid_rate" id="hid_rate" value="6750">
                <input type="hidden" name="hid_floor" id="hid_floor">
                <input type="hidden" name="hid_floor_rise" id="hid_floor_rise">
                <input type="hidden" name="hid_price" id="hid_price">
                
                <input type="hidden" name="residence" value="<?php echo $_POST['residence']; ?>">
                <input type="hidden" name="work_place" value="<?php echo $_POST['work_place']; ?>">
                <input type="hidden" name="designation" value="<?php echo $_POST['designation']; ?>">
                
                <button class="button validate" id="bfSubmitButton1" type="submit">Submit</button></div></div> 
                
                </form>
                
                </div>

                <div class="form_error span4" style="text-align:left;">
                   
                </div>
                
                </div>
                
                </div>
                
                
               </div>
            
            <div id="footer" class="container">
            	<div class="row">
                	
                	<div id="footer_kmb" class="span2" style="margin-left:0">
                    	<a href="about.html"><img src="img/kmb.png"></a>                      
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
	                            <img src="img/mail-icon.png">&nbsp; <span> lapalazzo@kmbestates.com</span>
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
		
        <script src="js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
        
        <script src="js/vendor/bootstrap.min.js"></script>        
		
        <script src="js/vendor/magnific/jquery.magnific-popup.min.js"></script>
        
        <script src="js/jquery.validate.min.js"></script>

        <script src="js/main.js"></script>

        <script type="text/javascript">


         //4 BHK + Family WEST
         var _4bhkf_w = '<option value="4174" data-flno="1"><font>Floor - 1</font> <strong> (Tarano West Deck) </strong></option>'+
                        '<option value="4228" data-flno="2"><font>Floor - 2</font> <strong> (Tarano West Deck) </strong></option>'+
                        '<option value="4174" data-flno="3"><font>Floor - 3</font> <strong> (Tarano West Deck) </strong></option>'+
                        '<option value="4228" data-flno="4"><font>Floor - 4</font> <strong> (Tarano West Deck) </strong></option>'+
                        '<option value="4174" data-flno="5"><font>Floor - 5</font> <strong> (Tarano West Deck) </strong></option>'+
                        '<option value="4228" data-flno="6"><font>Floor - 6</font> <strong> (Tarano West Deck) </strong></option>'+
                        '<option value="4174" data-flno="7"><font>Floor - 7</font> <strong> (Tarano West Deck) </strong></option>'+
                        '<option value="4228" data-flno="8"><font>Floor - 8</font> <strong> (Tarano West Deck) </strong></option>'+
                        '<option value="4174" data-flno="9"><font>Floor - 9</font> <strong> (Tarano West Deck) </strong></option>'+
                        '<option value="4228" data-flno="10"><font>Floor - 10</font> <strong> (Tarano West Deck) </strong></option>'+
                        '<option value="4174" data-flno="11"><font>Floor - 11</font> <strong> (Tarano West Deck) </strong></option>'+
                        '<option value="4228" data-flno="12"><font>Floor - 12</font> <strong> (Tarano West Deck) </strong></option>'+
                        '<option value="4174" data-flno="13"><font>Floor - 13</font> <strong> (Tarano West Deck) </strong></option>';


       //4 BHK + Family EAST
         var _4bhkf_e = '<option value="4235" data-flno="2"><font>Floor - 2</font> <strong> (Tarano East Terrazo) </strong></option>'+
                        '<option value="4186" data-flno="3"><font>Floor - 3</font> <strong> (Tarano East Deck) </strong></option>'+
                        '<option value="4235" data-flno="4"><font>Floor - 4</font> <strong> (Tarano East Terrazo) </strong></option>'+
                        '<option value="4186" data-flno="5"><font>Floor - 5</font> <strong> (Tarano East Deck) </strong></option>'+
                        '<option value="4235" data-flno="6"><font>Floor - 6</font> <strong> (Tarano East Terrazo) </strong></option>'+
                        '<option value="4186" data-flno="7"><font>Floor - 7</font> <strong> (Tarano East Deck) </strong></option>'+
                        '<option value="4235" data-flno="8"><font>Floor - 8</font> <strong> (Tarano East Terrazo) </strong></option>'+
                        '<option value="4186" data-flno="9"><font>Floor - 9</font> <strong> (Tarano East Deck) </strong></option>'+
                        '<option value="4235" data-flno="10"><font>Floor - 10</font> <strong> (Tarano East Terrazo) </strong></option>'+
                        '<option value="4186" data-flno="11"><font>Floor - 11</font> <strong> (Tarano East Deck) </strong></option>'+
                        '<option value="4235" data-flno="12"><font>Floor - 12</font> <strong> (Tarano East Terrazo) </strong></option>'+
                        '<option value="4186" data-flno="13"><font>Floor - 13</font> <strong> (Tarano East Deck) </strong></option>';


        //3 BHK + Family WEST
         var _3bhkf_w = '<option value="2993" data-flno="1"><font>Floor - 1</font> <strong> (Cordona West Deck) </strong></option>'+
                        '<option value="3109" data-flno="2"><font>Floor - 2</font> <strong> (Cordona West Terrazo) </strong></option>'+
                        '<option value="2993" data-flno="3"><font>Floor - 3</font> <strong> (Cordona West Deck) </strong></option>'+
                        '<option value="3109" data-flno="4"><font>Floor - 4</font> <strong> (Cordona West Terrazo) </strong></option>'+
                        '<option value="2993" data-flno="5"><font>Floor - 5</font> <strong> (Cordona West Deck) </strong></option>'+
                        '<option value="3109" data-flno="6"><font>Floor - 6</font> <strong> (Cordona West Terrazo) </strong></option>'+
                        '<option value="2993" data-flno="7"><font>Floor - 7</font> <strong> (Cordona West Deck) </strong></option>'+
                        '<option value="3109" data-flno="8"><font>Floor - 8</font> <strong> (Cordona West Terrazo) </strong></option>'+
                        '<option value="2993" data-flno="9"><font>Floor - 9</font> <strong> (Cordona West Deck) </strong></option>'+
                        '<option value="3109" data-flno="10"><font>Floor - 10</font> <strong> (Cordona West Terrazo) </strong></option>'+
                        '<option value="2993" data-flno="11"><font>Floor - 11</font> <strong> (Cordona West Deck) </strong></option>'+
                        '<option value="3109" data-flno="12"><font>Floor - 12</font> <strong> (Cordona West Terrazo) </strong></option>'+
                        '<option value="2993" data-flno="13"><font>Floor - 13</font> <strong> (Cordona West Deck) </strong></option>'; 


        //3 BHK + Family EAST
         var _3bhkf_e = '<option value="3496" data-flno="2"><font>Floor - 2</font> <strong> (Cordona East Deck) </strong></option>'+
                        '<option value="3496" data-flno="3"><font>Floor - 3</font> <strong> (Cordona East Deck) </strong></option>'+
                        '<option value="3496" data-flno="4"><font>Floor - 4</font> <strong> (Cordona East Deck) </strong></option>'+
                        '<option value="3496" data-flno="5"><font>Floor - 5</font> <strong> (Cordona East Deck) </strong></option>'+
                        '<option value="3496" data-flno="6"><font>Floor - 6</font> <strong> (Cordona East Deck) </strong></option>'+
                        '<option value="3496" data-flno="7"><font>Floor - 7</font> <strong> (Cordona East Deck) </strong></option>'+
                        '<option value="3496" data-flno="8"><font>Floor - 8</font> <strong> (Cordona East Deck) </strong></option>'+
                        '<option value="3496" data-flno="9"><font>Floor - 9</font> <strong> (Cordona East Deck) </strong></option>'+
                        '<option value="3496" data-flno="10"><font>Floor - 10</font> <strong> (Cordona East Deck) </strong></option>'+
                        '<option value="3496" data-flno="11"><font>Floor - 11</font> <strong> (Cordona East Deck) </strong></option>'+
                        '<option value="3496" data-flno="12"><font>Floor - 12</font> <strong> (Cordona East Deck) </strong></option>'+
                        '<option value="3496" data-flno="13"><font>Floor - 13</font> <strong> (Cordona East Deck) </strong></option>';  


        //3 BHK WEST
        var _3bhk_w =   '<option value="3186" data-flno="2"><font>Floor - 2</font> <strong> (Verona West Avanti) </strong></option>'+
                        '<option value="3186" data-flno="3"><font>Floor - 3</font> <strong> (Verona West Avanti) </strong></option>'+
                        '<option value="3186" data-flno="4"><font>Floor - 4</font> <strong> (Verona West Avanti) </strong></option>'+
                        '<option value="3186" data-flno="5"><font>Floor - 5</font> <strong> (Verona West Avanti) </strong></option>'+
                        '<option value="3186" data-flno="6"><font>Floor - 6</font> <strong> (Verona West Avanti) </strong></option>'+
                        '<option value="3186" data-flno="7"><font>Floor - 7</font> <strong> (Verona West Avanti) </strong></option>'+
                        '<option value="3186" data-flno="8"><font>Floor - 8</font> <strong> (Verona West Avanti) </strong></option>'+
                        '<option value="3186" data-flno="9"><font>Floor - 9</font> <strong> (Verona West Avanti) </strong></option>'+
                        '<option value="3186" data-flno="10"><font>Floor - 10</font> <strong> (Verona West Avanti) </strong></option>'+
                        '<option value="3186" data-flno="11"><font>Floor - 11</font> <strong> (Verona West Avanti) </strong></option>'+
                        '<option value="3186" data-flno="12"><font>Floor - 12</font> <strong> (Verona West Avanti) </strong></option>'+
                        '<option value="3186" data-flno="13"><font>Floor - 13</font> <strong> (Verona West Avanti) </strong></option>'+
                        '<option value="3186" data-flno="14"><font>Floor - 14</font> <strong> (Verona West Avanti) </strong></option>'+
                        '<option value="3186" data-flno="15"><font>Floor - 15</font> <strong> (Verona West Avanti) </strong></option>';  


       //3 BHK + Family Verona EAST
       var _3bhkf_e_v = '<option value="3209" data-flno="2"><font>Floor - 2</font> <strong> (Verona East Terrazo) </strong></option>'+
                        '<option value="3196" data-flno="3"><font>Floor - 3</font> <strong> (Verona East Deck) </strong></option>'+
                        '<option value="3209" data-flno="4"><font>Floor - 4</font> <strong> (Verona East Terrazo) </strong></option>'+
                        '<option value="3196" data-flno="5"><font>Floor - 5</font> <strong> (Verona East Deck) </strong></option>'+
                        '<option value="3209" data-flno="6"><font>Floor - 6</font> <strong> (Verona East Terrazo) </strong></option>'+
                        '<option value="3196" data-flno="7"><font>Floor - 7</font> <strong> (Verona East Deck) </strong></option>'+
                        '<option value="3209" data-flno="8"><font>Floor - 8</font> <strong> (Verona East Terrazo) </strong></option>'+
                        '<option value="3196" data-flno="9"><font>Floor - 9</font> <strong> (Verona East Deck) </strong></option>'+
                        '<option value="3209" data-flno="10"><font>Floor - 10</font> <strong> (Verona East Terrazo) </strong></option>'+
                        '<option value="3196" data-flno="11"><font>Floor - 11</font> <strong> (Verona East Deck) </strong></option>'+
                        '<option value="3209" data-flno="12"><font>Floor - 12</font> <strong> (Verona East Terrazo) </strong></option>'+
                        '<option value="6442" data-flno="13"><font>Floor - 13</font> <strong> (Verona East Deck) </strong></option>';  
                    

         //4 BHK + Family + Study + Duplex WEST
         var _4bhkfsd_w = '<option value="6442" data-flno="13"><font>13 &amp; 14 (Cordona West Duplex)</font></option>';


         $('#apartment').change(function(ind){



            $('#facing option').remove();
            $('#floor option').remove();

            $('#facing').append('<option value=""><font>- Select -</font></option><option value="east"><font>East</font></option><option value="west"><font>West</font></option>');


            switch($(this)[0].selectedIndex){

              case 0:   $('#floor option').remove();
                         $('#facing option').remove();
                        break;                

              //3bhk
              case 1:   $('#facing option').filter("[value='east']").remove();
                        break;


              //3bhk + family
              case 2:
                      break;


              //4bhk + family
              case 3:
                      break;


              //4bhk + family + study + duplex
              case 4: $('#facing option').filter("[value='east']").remove();
                      break;

              }


         });


         function set_floor_rise_east(){
             

             switch($('#apartment')[0].selectedIndex){


              case 0:  
                        break;                

              //3bhk
              case 1:   $('#floor').append();
                        break;


              //3bhk + family
              case 2:   $('#floor').append(_3bhkf_e);
                        $('#floor').append(_3bhkf_e_v);
                        break;


              //4bhk + family
              case 3:   $('#floor').append(_4bhkf_e);
                        break;


              //4bhk + family + study + duplex
              case 4:   $('#floor').append();
                        break;

            }

         }

         function set_floor_rise_west(){



             switch($('#apartment')[0].selectedIndex){


              case 0:  
                        break;

              //3bhk
              case 1:  $('#floor').append(_3bhk_w);
                        break;


              //3bhk + family
              case 2:   $('#floor').append(_3bhkf_w);
                        break;


              //4bhk + family
              case 3:   $('#floor').append(_4bhkf_w);
                        break;


              //4bhk + family + study + duplex
              case 4:   $('#floor').append(_4bhkfsd_w);
                        break;

            }

         }


         $('#facing').change(function(ind){


           $('#floor option').remove();



           switch($(this).val()){

              case '': 
                      break;

              case 'east': set_floor_rise_east();
                            break;

              case 'west': set_floor_rise_west();
                            break;

           }


           calc_price();

         });


          $('#floor').change(function(ind){

               calc_price();

          });

        function calc_price(){


            //Set text to the hidden fields, to show in the next page
            $('#hid_apt_type').val($('#apartment :selected').text());

            $('#hid_floor').val($('#floor :selected').text());


            //set floor rise based on selected floor
            var fr=0;

            var apt_selected = $('#floor').find('option:selected');


            switch(apt_selected.data('flno')){

              case 1: fr=0;
                        break;

              case 2: fr=0;
                        break;

              case 3: fr=100;
                        break;

              case 4: fr=100;
                        break;

              case 5: fr=200;
                        break;

              case 6: fr=200;
                        break;

              case 7: fr=300;
                        break;

              case 8: fr=300;
                        break;

              case 9: fr=400;
                        break;

              case 10: fr=500;
                        break;

              case 11: fr=600;
                        break;

              case 12: fr=700;
                        break;

              case 13: fr=800;
                        break;

              case 14: fr=900;
                        break;

              case 15: fr=1000;
                        break;

              default: fr=0;

            }

            var facing_rate=0;
            if($('#facing').val()=='east'){

                facing_rate=100;

            }
            else{

                facing_rate=0;

            }

            //FORMULA // 
            //Price = (Base Rate + Floor Rise + Facing)*Size

            var price = ( parseInt($('#hid_rate').val()) + parseInt(fr) + parseInt(facing_rate)) * parseInt($('#floor').val());
            

            // x=price.toString();

            // var lastThree = x.substring(x.length-3);
            // var otherNumbers = x.substring(0,x.length-3);
            // if(otherNumbers != '')
            //     lastThree = ',' + lastThree;

            // var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
            
            $('#hid_price').val(price);

        }


         jQuery.validator.messages.required = "";
         
         $("#enquiry_form").validate({

          invalidHandler: function(e, validator) {
            
            var errors = validator.numberOfInvalids();
            
            if (errors) {

              //$('form .error').hide();

              var message = errors == 1
                ? 'Please fill in the highlighted fields'
                : 'Please fill in the highlighted fields';

              $("div.form_error").html(message);

              $("div.form_error").show();

            } else {

              $("div.form_error").hide();

            }

          }

                

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
