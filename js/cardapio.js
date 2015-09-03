$(document).ready(function (){

	$.ajaxSetup({cache:false});
	$('#cardapio-pages').load($('.cd-padrao a').attr('href'));

	$('#menu-cardapio li a').on('click', function(e) {
		e.preventDefault();
		$('#cardapio-pages').html('<h1 style="color:#fc9461;text-align:center">Carregando</h1>');
		$('#cardapio-pages').load($(this).attr('href'));
		return false;
	});

});