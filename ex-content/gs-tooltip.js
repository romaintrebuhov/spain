$(document).ready(function() {
	
	var LP_TOOLTIP_ACTIVE = 0;
	var TOOLTIP_MARGIN = 0;
	var TOOLTIP_TEMPLATE = "<span class='gs-tooltip'>{{message}}<span class='gs-tooltip-arrow'></span></span>";
	
	function CheckPhoneNumber(phone, country) {
	
		result = new Array();
		
		switch (country) {

		  case 'ES':
			regex = /^(\+)?34(\s)?(\d){9}$/;
			error_msg = 'Por favor, introduzca un número de teléfono válido. El número de teléfono debe contener 11 dígitos y comenzar con 34. Por ejemplo: 34912345678.';
			break;
			
		  case 'PT':
			regex = /^(\+)?351(\s)?(\d){9}$/;
			error_msg = 'Por favor, insira um número de telefone válido. O número de telefone deve conter 12 dígitos e começar com 351. Por exemplo: 351912345678.';
			break;
			
		  case 'FR':
			regex = /^(\+)?33(\s)?(\d){9,11}$/;
			error_msg = 'Veuillez saisir un numéro de téléphone valide. Le numéro de téléphone doit contenir 11-13 chiffres et commencer par 33. Par exemple: 33123456789.';
			break;
			
		  case 'DE':
			regex = /^(\+)?49(\s)?(\d){5,13}$/;
			error_msg = 'Bitte geben Sie eine gültige Telefonnummer ein. Die Telefonnummer sollte 7-15 Ziffern enthalten und mit 49 beginnen. Zum Beispiel: 49123456789.';
			break;
			
		  case 'AT':
			regex = /^(\+)?43(\s)?(\d){4,13}$/;
			error_msg = 'Bitte geben Sie eine gültige Telefonnummer ein. Die Telefonnummer sollte 6-15 Ziffern enthalten und mit 43 beginnen. Zum Beispiel: 43123456789.';
			break;

		  default:
			regex = /^(\d){6,20}$/;
			error_msg = 'Please enter valid phone number. Phone number should contain 6-20 digits.'
		}
		
		result['valid'] = regex.test(phone);
		result['error'] = error_msg;
		
		return result;
	}
	
	$('body').on('click', '.gs-tooltip', function() {
	
		$(this).fadeOut(200, function() {
			$(this).remove();
		});
		
		LP_TOOLTIP_ACTIVE = 0;
		
	});
	
	$(window).on('resize', function(){
		
		$(".gs-tooltip").remove();
		
		LP_TOOLTIP_ACTIVE = 0;
		
	});
	
	$('form').on('submit', function(e) {
	
		var form_element = $(this);
		var input_element = form_element.find('input[name="phone"]');
		
		var form_data_serialize = form_element.serializeArray();
		var form_data = {};
		
		$(form_data_serialize).each(function(index, obj) {
			form_data[obj.name] = obj.value;
		});
		
		CheckPhoneResult = CheckPhoneNumber(form_data.phone, LP_COUNTRY);
		if (!CheckPhoneResult['valid']) {
			
			e.preventDefault();
			
			if (LP_TOOLTIP_ACTIVE == 1) {
				
				$("span.gs-tooltip").fadeOut(200, function() {
					$(this).remove();
				});
				
				LP_TOOLTIP_ACTIVE = 0;
				
			}
			
			var tooltip_element = $(TOOLTIP_TEMPLATE.replace("{{message}}", CheckPhoneResult['error']));
			
			tooltip_element.hide().insertAfter(input_element);
			
			tooltip_element.css("width", input_element.outerWidth() - 20).fadeIn(200).offset({
				top: input_element.offset().top - tooltip_element.outerHeight() - 10, 
				left: input_element.offset().left
			});
			
			LP_TOOLTIP_ACTIVE = 1;
			
			$('html,body').stop().animate({ scrollTop: $(input_element).offset().top - tooltip_element.outerHeight() - 20}, 1000);
				
		}
		
	});
	
});