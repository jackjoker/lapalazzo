// Start of Tawk.to Script



var $_Tawk_API={},$_Tawk_LoadStart=new Date();

(function(){

var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];

s1.async=true;

s1.src='https://embed.tawk.to/5530ae0b16fecb103bf55a03/default';

s1.charset='UTF-8';

s1.setAttribute('crossorigin','*');

s0.parentNode.insertBefore(s1,s0);

})();



// End of Tawk.to Script





$(document).ready(function(e) {





	var arrow_left = ($('.page_sub_tabs li:first').width() - $('.active_arrow').width())/2;



	$('.active_arrow').css('left',arrow_left+'px');



	$('.page_sub_tabs li').each(function(){



		$(this).children('a').click(function(){



			$('.page_sub_tabs li').removeClass('active');



			$(this).parent().addClass('active');



			var link_div =  $(this).attr('rel');

			

			var slide_height =  $('.content_slider_item').height();



			//alert(slide_width * $('#'+link_div).index());

			$('.content_slider_holder').animate({ 'top': '-'+ (slide_height * $('#'+link_div).index()) + 'px' }, 700);



			//set acive arrow to center of clicked item



			var new_ar_pt = $(this).parent().position().left ;



			arrow_left = ($(this).parent().width() - $('.active_arrow').width())/2;



			

			$('.active_arrow').animate({'left':new_ar_pt + arrow_left+'px'},500);



		});



	});





	$(window).scroll(function() {

	    if ($(this).scrollTop()) {

	        $('#go_top').fadeIn();

	    } else {

	        $('#go_top').fadeOut();

	    }

	});



	$("#go_top").click(function() {



		

	    $("html, body").animate({scrollTop: 0}, 1000);

	 });



	//get param and make sub tab clicked

	if(get_url('p')!==null || get_url('p')!="")

	{

		$('a[rel="'+get_url('p')+'"]').click();



		$('a[rel="'+get_url('p')+'"]').click();

		

	}



});





var popup_html = '<div id="popup">\

              <div class="row">\

                <div class="span9 popup-content center-block">\

                  <span class="close_box"><a href="javascript:"> X </a></span>\

                  <div class="span3 popup-cnt-area">\

                    <div>\

                      <img src="img/popup-exp.jpg" class="img-responsive">\

                    </div>\

                    <div class="span3 popup-frm-cnt">\

                      <p>\

                      To experience La Palazzo and to know more about KMB.\

                      </p>\

                       <form id="frm_newsletter_signup" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">\

                                <input type=hidden name="oid" value="00D90000000kxJZ">\

                                <input type=hidden name="retURL" value="http://www.lapalazzo.in/newsletter_signup.html">\

                                <input  id="first_name" maxlength="40" name="first_name" size="20" type="Hidden" value="For"/>\

                                <input  id="last_name" maxlength="80" name="last_name" size="20" type="Hidden" value="Newsletter"/>\

                                <input  id="email" maxlength="80" name="email" size="20" type="text" class="input_txt email required" placeholder="Enter your email id"/><br>\

                                <input  id="mobile" maxlength="40" name="mobile" size="20" type="text" class="input_txt number required" placeholder="Mobile number"/><br>\

                                <input  id="00N9000000DQ55X" name="00N9000000DQ55X" type="Hidden" value="1" checked="true"/>\

                                <button name="submit" class="button validate" id="bfSubmitButton" type="submit"></button>\

                        </form>\

                    </div>\

                  </div>\

                  <div class="clearfix"></div>\

                </div>\

            </div>\

          </div>';



function newsletter_popup(){



	// alert($.cookie('newsletter_signup'));

	

	if(!$.cookie('newsletter_signup') || $.cookie('newsletter_signup')!="success"){

		

		$('body').append(popup_html);



		window.setTimeout(function(){



		$('#popup').css('display','table')



		},10000);

		

		$('.close_box').click(function(){

			$('#popup').fadeOut();

		})



		$('#frm_newsletter_signup').validate();



	}

}





function newsletter_popup_showinstant(){



	// alert($.cookie('newsletter_signup'));

	

		$('#popup_container').html(popup_html);



		window.setTimeout(function(){



		$('#popup').css('display','table')



		},0);

		

		$('.close_box').click(function(){

			$('#popup').fadeOut();

		})



		$('#frm_newsletter_signup').validate();



}



function newsletter_popup_onclick(){





	

	if(true){



		if($('#popup').length)

			$('#popup').fadeIn()

		else{



			$('body').append(popup_html);



			window.setTimeout(function(){



			$('#popup').css('display','table')



			},100);

			

			$('.close_box').click(function(){

				$('#popup').fadeOut();

			})



			$('#frm_newsletter_signup').validate();

		}

		

	}

}



function get_url(sParam){



	 var sPageURL = window.location.search.substring(1);

                var sURLVariables = sPageURL.split('&');

                for (var i = 0; i < sURLVariables.length; i++) 

                {

                    var sParameterName = sURLVariables[i].split('=');

                    if (sParameterName[0] == sParam) 

                    {

                        return sParameterName[1];

                    }

                }



}



function plans_subnav_slider(mouse_scroll)

{	



	$('.right_sub_nav li').each(function(){





			$(this).children('a').click(function(){



				$('.right_sub_nav li').removeClass('clicked');



				$(this).parent().addClass('clicked');



				$('.brief_des').hide();



				$(this).parent().children('.brief_des').show();



				var link_div =  $(this).attr('rel');

				

				var slide_height =  $('.content_slider_item').height();

				

				$('.smaller_size figure').fadeOut(300);



				$('.smaller_size figure:eq("'+$('#'+link_div).index()+'")').fadeIn(500);



				//alert(slide_width * $('#'+link_div).index());

				$('.content_slider_holder').animate({ 'top': '-'+ (slide_height * $('#'+link_div).index()) + 'px' }, 700);



			});



		});





		if($('#below_sidebox').children().length >0 && mouse_scroll==true)

		{	

			var  obj = $('body')[0];



			

	    	if (obj.addEventListener) {



	            obj.addEventListener("mousewheel", scroll_side_nav, false);

	            obj.addEventListener("DOMMouseScroll", scroll_side_nav, false);



	        }

	        else obj.attachEvent("onmousewheel", scroll_side_nav);

		}

}



function scroll_side_nav(e) {



				if($('.content_slider_holder').is(":animated"))

					 return;

               	

                // cross-browser wheel delta

                var e = window.event || e;



                var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));



                if(delta==-1){ // scrol down

                    

                  $('.right_sub_nav li.clicked').next().children('a').click();



                }

                else{ //scrol up

				

				   $('.right_sub_nav li.clicked').prev().children('a').click();

                    

                }



                return false;



 }







//get_url('hel')