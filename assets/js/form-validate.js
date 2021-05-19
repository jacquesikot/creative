$(".newsletter-success").hide();
$(".newsletter-error").hide();
$(".quote-success").hide();
$(".quote-error").hide();
$(".contact-success").hide();
$(".contact-error").hide();
$(".consult-success").hide();
$(".consult-error").hide();
$(".overlay-consult").hide();
$(document).on('click','.consult-btn',function(){  
	$(".overlay-consult").show();
	$(".sticky-header").hide();
	$(".header-top").hide();
	$(".header-lower").hide();
});
$(document).on('click','.consult-close',function(){  
	$(".overlay-consult").hide();
	$(".sticky-header").show();
	$(".header-top").show();
	$(".header-lower").show();
	$(".consult-success").hide();
$(".consult-error").hide();
});
$(document).on('submit','.formValidate',function(){  
	return formValidate($(this)); 
}); 

$(document).on('click','#newsletter_submit',function(){  
	var _thix = $('form#newsletter');
	//return formValidate($(this));
		formValidate(_thix,function(res){
			//console.log('tttttt');
			console.log(res);
			//var site_url = window.location;
			//alert(site_url);
			if(res){
				//alert("tt");
				var formss=$('#newsletter');
				var formData = new FormData(formss[0]);
				$.ajax({
					type: 'POST',
					cache: false,
					data: formData,
					processData: false,
					contentType: false,
					url: site_url+'newslettermail.php',
					dataType: 'json',
					success: function(res){
						
						if(res.status=='success') {
							//alert(res.message); 
							$(".newsletter-success").show().html(res.message);
							$(".newsletter-error").hide();
							$('#newsletter')[0].reset();
							
						} else {
							$(".newsletter-error").show().html(res.message);
								$(".newsletter-success").hide();
							$('#newsletter')[0].reset();
							//formss[0].reset();
						}
					}
				})
			}

		})
});  
$(document).on('click','#sendrequest',function(){ 
	_thiz = $('form#sendrequestform');
	//return formValidate($(this));
		formValidate(_thiz,function(res){
			//console.log('tttttt');
			console.log(res);
			//var site_url = window.location;
			//alert(site_url);
			if(res){
				//alert("tt");
				var formss=$('#sendrequestform');
				var formData = new FormData(formss[0]);
				$.ajax({
					type: 'POST',
					cache: false,
					data: formData,
					processData: false,
					contentType: false,
					url: site_url+'mail.php',
					dataType: 'json',
					success: function(res){
						
						if(res.status=='success') {
							//alert(res.message); 
							$(".quote-success").show().html(res.message);
						$(".quote-error").hide();
							formss[0].reset();
							
						} else {
							$(".quote-error").show().html(res.message);
								$(".quote-success").hide();
							formss[0].reset();
						}
					}
				})
			}

		})
});  
$(document).on('click','#contact_submit',function(){  
	var thiz= $('form#contactform')
	//return formValidate($(this));
		formValidate(thiz,function(res){
			//console.log('tttttt');
			console.log(res);
			//var site_url = window.location;
			//alert(site_url);
			if(res){
				//alert("tt");
				var formss=$('#contactform');
				var formData = new FormData(formss[0]);
				$.ajax({
					type: 'POST',
					cache: false,
					data: formData,
					processData: false,
					contentType: false,
					url:site_url+'contactmail.php',
					dataType: 'json',
					success: function(res){
						
						if(res.status=='success') {
							//alert(res.message); 
							$(".contact-success").show().html(res.message);
						$(".contact-error").hide();
							formss[0].reset();
							
						} else {
							$(".contact-error").show().html(res.message);
								$(".contact-success").hide();
							formss[0].reset();
						}
					}
				})
			}

		})
});  
$(document).on('click','#consultsubmit',function(){  
	var thiz= $('form#consultform')
	//return formValidate($(this));
		formValidate(thiz,function(res){
			//console.log('tttttt');
			console.log(res);
			//var site_url = window.location;
			//alert(site_url);
			if(res){
				//alert("tt");
				var formss=$('#consultform');
				var formData = new FormData(formss[0]);
				$.ajax({
					type: 'POST',
					cache: false,
					data: formData,
					processData: false,
					contentType: false,
					url:site_url+'consultmail.php',
					dataType: 'json',
					success: function(res){
						
						if(res.status=='success') {
							//alert(res.message); 
							$(".consult-success").show().html(res.message);
						$(".consult-error").hide();
							formss[0].reset();
							
						} else {
							$(".consult-error").show().html(res.message);
								$(".consult-success").hide();
							formss[0].reset();
						}
					}
				})
			}

		})
});  
/*$(document).on('click','.formValidate input,select',function(){  
	if(typeof($(this).attr('validate'))!='') 
		return formValidate($(this).closest('form')); 
}); */ 


function formValidate(vThiz,callback) { 
	
	var focus_field;
	var ret=true; 
	var form_id = vThiz.attr('id');

	vThiz.find('input , select , textarea , checkbox , radio').each(function(){  
		var thiz = $(this);
 
		if($(this).attr('validate')!='' && $(this).is(":visible") && $(this).attr('validate')!=undefined ) 
		{   
			var error_text=$(this).attr('validate');
				
									
			if($.trim(thiz.val())=='') { 
				
				/*thiz.closest('div.form-group').find('span.field-error').fadeIn().html(error_text);
				thiz.closest('div.form-group').addClass('has-error');
				thiz.closest('div.form-group').css('display','block');
				*/

				thiz.addClass('border_red');
				/* thiz.addClass('focus');
				$('html, body').animate({
                    scrollTop: $('.focus').offset().top
                }, 2000); */
				if(focus_field != 1)
				{
				
					//alert(focus_field);
					//thiz.focus();
					focus_field=1;
					//alert(focus_field);
				}
				ret=false; 
			} else if(thiz.hasClass('validEmail') && !validEmail(thiz)){
				/*thiz.closest('div.form-group').find('span.field-error').fadeIn().html('Enter valid email'); 
				thiz.closest('div.form-group').addClass('has-error');*/
				thiz.addClass('border_red');
				//thiz.addClass('focus');
				ret=false; 
			} 
			else if(thiz.hasClass('validMobile') && !validMobile(thiz)){
				/*thiz.closest('div.form-group').find('span.field-error').fadeIn().html('Enter valid Mobile Number'); 
				thiz.closest('div.form-group').addClass('has-error');*/
				thiz.addClass('border_red');
				//thiz.addClass('focus');
				ret=false; 
			}
			else if($(this).attr('type')=='checkbox') 
			{   
				var checkName=$(this).attr('name');    
				if($('input[name="'+checkName+'"]:checked').length==0) 
				{  
					$(this).closest('div.form-group').find('span.field-error').fadeIn().html(error_text);
					ret=false; 
				} 
				else 
				{  
					$(this).closest('div.form-group').find('span.field-error').html(''); 
				}
			}
			else if($(this).attr('type')=='radio') 
			{     
				var radioName=$(this).attr('name'); 
				if($('input[name="'+radioName+'"]:checked').length==0) 
				{  
					$(this).closest('div.form-group').find('span.field-error').fadeIn().html(error_text);
					ret=false; 
				} 
				else 
				{  
					$(this).closest('div.form-group').find('span.field-error').html(''); 
				}
			}
			else {  
				thiz.removeClass('border_red');
				$(this).closest('div.form-group').find('span.field-error').html(''); 
			}  
		} 
		
	}); 
		
	callback(ret);
}
$(document).on('focusin','.form-group',function(){ 
	var thiz = $(this);
	thiz.removeClass('border_red'); 

});
$(document).on('change','.form-control',function(){
	var thiz = $(this); 
	thiz.closest('.form-group').find('span.field-error').fadeOut(2500);
	thiz.removeClass('field-error-border');
	thiz.removeClass('focus');
}); 
$(document).on('keyup','.form-control',function(){ 
	var thiz = $(this);
	//thiz.next().find('p.field-error').fadeOut(1000);
	//thiz.next().find('.form-control').removeClass('focus');
	thiz.closest('.form-group').find('span.field-error').fadeOut(2500);
	thiz.removeClass('field-error-border');
	thiz.removeClass('focus');
}); 
function validEmail(thiz) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
	if(!pattern.test(thiz.val())) {  
		return false;
	}
	return true; 
}
function validMobile(thiz) {
	//var mobile_no = $('#mobile_no').val();
	if(thiz.val().length!=10){
		return false;
	}
return true; 
} 