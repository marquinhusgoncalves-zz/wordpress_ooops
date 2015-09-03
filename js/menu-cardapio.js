$(document).ready(function(){

	var templateDir = '<?php bloginfo("template_directory"); ?>/img/cardapio/';
		
	$('#menu-cardapio > .menu-item > a').each(function(index, name){
		var nomeTag = $(this).text();
		$(this).attr({ 'data-container' : 'body', 'data-toggle' : 'popover', 'data-placement' : 'top', 'data-content' : nomeTag }).popover({ trigger: "hover" });
		console.log(nomeTag);
	})

	$('#menu-cardapio > .menu-item > a').text('');
	$('#menu-cardapio > .menu-item > a').each(function(index, value){
		var ihref = $(this).attr('href');
		if (ihref.indexOf("http") >= 0)
		{
			var b = ihref
			var temp = new Array();
			temp = b.split('/');
			console.log(temp[6]);
		}
		$(this).each(function(){
				$('<img src="' + templateDir + temp[6] + '.png" />').appendTo(this);
			})
		})

});