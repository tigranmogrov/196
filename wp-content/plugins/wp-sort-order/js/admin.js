// JavaScript Document

	function op0_func($){
		var op1 = true;
		$.each($('.wpso #wpso_select_extras .options1 input[type="checkbox"]'), function(){
			if(!$(this).prop( "checked" ))
			op1 = false;
		});
		if(op1){
			$('#wpso_allcheck_extras').attr("checked", "checked");
			$('#wpso_allcheck_extras').parent().addClass('check');
		}else{
			$('#wpso_allcheck_extras').parent().removeClass('check');
		}
	}
	
	function op1_func($){
		var op1 = true;
		$.each($('.wpso #wpso_select_objects .options1 input[type="checkbox"]'), function(){
			if(!$(this).prop( "checked" ))
			op1 = false;
		});
		if(op1){
			$('#wpso_allcheck_objects').attr("checked", "checked");
			$('#wpso_allcheck_objects').parent().addClass('check');
		}else{
			$('#wpso_allcheck_objects').parent().removeClass('check');
		}
	}
	
	function op2_func($){
		var op2 = true;
		$.each($('.wpso #wpso_select_tags .options2 input[type="checkbox"]'), function(){
			if(!$(this).prop( "checked" ))
			op2 = false;
		});
		
		if(op2){
			$('#wpso_allcheck_tags').attr("checked", "checked");
			$('#wpso_allcheck_tags').parent().addClass('check');
		}else{
			$('#wpso_allcheck_tags').parent().removeClass('check');
		}
	}
	jQuery(document).ready(function($){
		
		$('.wpso label.clickable').on('click', function(e){
			
			console.log($(this));
		
			if(e.timeStamp!=0){
				if($(this).hasClass('check'))
				$(this).removeClass('check');
				else
				$(this).addClass('check');
			}
	
			
		});
		
		$.each($('.wp-submenu li a'), function(){
			if($(this).attr('href')=='options-general.php?page=wpso-settings'){
				$(this).parent().addClass('wpso_menu');
			}
		});
		
	
		op0_func($);
		op1_func($);
		op2_func($);
		
		$('.wpso #wpso_select_extras .options1 input[type="checkbox"]').on('click', function(){
			op0_func($);
		});
		
		$('.wpso #wpso_select_objects .options1 input[type="checkbox"]').on('click', function(){
			op1_func($);
		});
		
		$('.wpso #wpso_select_tags .options2 input[type="checkbox"]').on('click', function(){
			op2_func($);
			
		});	
		
		$('small.premium').on('click', function(){
			window.open($('a.premium').attr('href'));
			
		});
		
		$("#wpso_allcheck_extras").on('click', function(){
			var items = $("#wpso_select_extras input");
			if ( $(this).is(':checked') ) $(items).prop('checked', true);
			else $(items).prop('checked', false);	
		});
					
		$("#wpso_allcheck_objects").on('click', function(){
			var items = $("#wpso_select_objects input");
			if ( $(this).is(':checked') ) $(items).prop('checked', true);
			else $(items).prop('checked', false);	
		});
	
		$("#wpso_allcheck_tags").on('click', function(){
			var items = $("#wpso_select_tags input");
			if ( $(this).is(':checked') ) $(items).prop('checked', true);
			else $(items).prop('checked', false);	
		});		
	});