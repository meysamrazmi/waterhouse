$(document).ready(function(){
	
	if(Drupal.settings.product_attributes){
		var attrLnegth = Object.values(Drupal.settings.product_attributes).length;

		$('.page-node-717 .view-review-information .view-content .views-row:not(:first-child)').each(function(){
			var row = $(this).find('tbody').html();
			$('.page-node-717 .view-review-information .view-content .views-row:first-child').find('tbody').append(row);
			$(this).css({'display' : 'none'});
		});

		var completedRow = $('.page-node-717 .view-review-information .view-content .views-row:first-child').find('tbody tr').length;

		attrLnegth  = attrLnegth - completedRow;

		if(attrLnegth > 0){
			$('.webform-client-form-717 > div').prepend(
			'<div class="message alert alert-warning"><div class="info-pm">برای تکمیل ثبت نام می بایست اطلاعات تمامی افرادی که برای آن ها بلیت تهیه شده است را با ایجاد سطر جدید (در صورت لزوم)، کامل کنید.</div><div class="alert-pm"><span></span></div><div class="row-num"><span>'
			+(attrLnegth-1)+
			'</span> سطر دیگر باید اضافه گردد</div></div>');
			
			if(attrLnegth == 1){
				$('.webform-client-form-717 .message .row-num').css({'display' : 'none'});
				$('#edit-users_information-0 > .btn.form-submit.ajax-processed').css({"display" : "none"});
			}
			Drupal.behaviors.exampleModule = {
				attach: function (context, settings) {
					$('.webform-client-form-717 > div .message .row-num > span').text(attrLnegth - ($('#edit-users_information-0-table  tbody tr').length-1));
					if($('#edit-users_information-0-table  tbody tr').length >= attrLnegth+1){
						$('#edit-users_information-0 > .btn.form-submit.ajax-processed').css({"display" : "none"});
					}
				}
			};
			
			$('.webform-client-form-717 .form-actions .form-submit').click(function(e){
				if($('#edit-users_information-0-table  tbody tr').length < attrLnegth+1){
					$('.webform-client-form-717 > div  .message .alert-pm > span').text('اطلاعات تعداد افراد ثبت نام شده کافی نمی باشد!');
					$('.webform-client-form-717 > div  .submit-warning').css({'visibility' : 'unset'});
					e.preventDefault();
				}
				/*
				var flag = false;
				$('#edit-users_information-0-table tbody tr td').each(function(){
					var text = $(this).find('input').val();
					if((text === '') && (text !== 'undefined')){
						flag = true;
					}
				});
				*/
				
			});
			/*
			if($('.page-node-717 .alert-warning.messages').length){
				$('.page-node-717 .alert-warning.messages').css({'display' : 'none'});
				$('.page-node-717 .alert-warning.messages').parent().children('.region-content').css({'display' : 'none'});
				$('.page-node-717 .alert-warning.messages').parent().append('<div>شما یک بار این فرم را پر کرده اید.</div>');
			}
			*/
		}else{
			$('.page-node-717 .webform-client-form-717').css({"display" : "none"});
		}
	}

	if($('.page-user').length && getParameterByName('destination') == 'cart/checkout'){
		$('#uc_Progressbar').css({'display':'flex'});
		$('#uc_Progressbar .bullet:nth-child(3)').addClass('current');
		$('#uc_Progressbar .bullet:nth-child(1), #uc_Progressbar .bullet:nth-child(2)').addClass('done').removeClass('current');
	}
	$('#login-form .captcha').detach().insertBefore('.login-forgot');
	if($('.page-cart').length && Drupal.settings.register){
		$('#cart-form-pane td.qty').css({'display':'none'});
		//fixing product description in user cart
		$('ul.product-description').html('<li>'+ $('ul.product-description li').text().split(':')[1].split(', ').join('</li><li>') + '</li>');
		var num = 1, item = 0;
		$('ul.product-description li').each(function(i){
		if(i > 0){
			if($(this).text() == $(this).parent().children().eq(i - item - 1).text()){
				num += 1;
				item += 1;
				$(this).remove();
			}else{
				if(num > 1){
					$(this).parent().children().eq(i - item - 1).text($(this).parent().children().eq(i - item - 1).text() + ' - ' + num + ' نفر')
					num = 1;
				}
			}
		}
		})
		if(num > 1){
			$('ul.product-description li').last().text($('ul.product-description li').last().text() + ' - ' + num + ' نفر')
		}
	}
	
});

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
