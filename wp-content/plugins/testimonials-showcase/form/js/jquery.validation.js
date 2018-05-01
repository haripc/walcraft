/*
jQuery( '#ttshowcase_form' ).submit(function( event ) {

	   event.preventDefault();

});
*/

jQuery(document).ready(function(){

	jQuery('#ttshowcase_form.tt_form_has_ajax').submit(function( event ) {
	   event.preventDefault();
	}).find('.tt_form_button').one('click',function(){
		tt_ajax_form();
		console.log('form submitted');
	});


});

function tt_ajax_form() {

 	var form = jQuery('.ttshowcase_form_wrap form');
 	var wrapper = jQuery('.tt_form_container');
	
	form.fadeTo( "slow" , 0.1, function() {
		wrapper.addClass('tt_loading');
		var data = new FormData(document.getElementById("ttshowcase_form"));
	   data.append("label", "WEBUPLOAD");
	   data.append("action", "ttshowcase_ajax_form");

		 jQuery.ajax({
	            url: ajax_object.ajax_url,
	            type: "POST",
	            data: data,
	            contentType: false,      
				cache: false,            
				processData:false,  
	            success: function (response) {
					

					var el = wrapper;

				  var elOffset = el.offset().top;
				  var elHeight = el.height();
				  var windowHeight = jQuery(window).height();
				  var offset;

				  if (elHeight < windowHeight) {
				    offset = elOffset - ((windowHeight / 2) - (elHeight / 2));
				  }
				  else {
				    offset = elOffset;
				  }

				  jQuery('html, body').animate({scrollTop:offset-100}, 700, function() {

				  	wrapper.html(response).removeClass('tt_loading');
				  	form.fadeTo( "slow" , 1, function() {});

				  	
			  		jQuery('html, body').find('.tt_form_button').one('click',function(){
						tt_ajax_form();
						console.log('form submitted');
					});
				  	

				  });
				  
				 


	            },
	 
	        });
	});
    

	   
  

}