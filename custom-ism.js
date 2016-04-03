// JavaScript Document


jQuery(document).ready(function(){
	
	
	//order form
	$('input[type=radio][name=radio-827]').change(function() {
		if (this.value == 'No') {
			$('.previous-order-no').show();
		} else {
			$('.previous-order-no').hide();
		}
	});
	//
	$('input[type=radio][name=radio-290]').change(function() {
		if (this.value == 'No') {
			$('.home-during-delivery-no').show();
		} else {
			$('.home-during-delivery-no').hide();
		}
	});
	
	//
	$('input[type=radio][name=radio-290]').change(function() {
		if (this.value == 'No') {
			$('.leave-at-door').show();
		} else {
			$('.leave-at-door').hide();
		}
	});
	
	//
	$('input[type=radio][name=radio-12]').change(function() {
		if (this.value == 'No') {
			$('.leave-at-door-no').hide();
		} else {
			$('.leave-at-door-no').show();
		}
	});



	//sabbat-time
	$('.sabbat-time .CLTable').find('br').remove();	
	var value = $(".CLHeadingBold").html(); 
	value = value.replace(":", ""); 
	$(".CLHeadingBold").html(value);
	
	// remove space
	$('.sabbat-time .CLTime').each(function(index, element) {
		var value = $(this).html();
		value = value.replace(" PM", "PM"); 
		$(this).html(value);        
    });
	
	
	// remove space
	$('.sabbat-time .CLheading .CLTable table').each(function(index, element) {
		var CLdate = $(this).find('.CLdate').html();
		var CLTime = $(this).find('.CLTime').html();
		$(this).html(CLdate + " " + CLTime);    
    });
	
});