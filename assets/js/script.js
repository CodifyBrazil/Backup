$(function(){

	// animacoes de hover, animate, entre outras animacoes...
	$('.opt button').hover(function(){
		$(this).animate({
			"background-color":"#00a7d0",
			"color":"#fff"
		},500);
	},
		function(){
			$(this).animate({
				"background-color":"#fff",
				"color":"#333"
			},500);
	});


	$('#apk').hover(function(){
		$('.aplicativos-home').animate({
			"margin-left":1020,
			"display":"block"
		},500);
		$('.aplicativos-home').css("display","block");
	},function(){
		$('.aplicativos-home').animate({
			"margin-left":1580			
		},500);
		$('.aplicativos-home').css("display","none");
	});

	$('.menu button').hover(function(){
		$(this).animate({
			"width":50,
			"height":50
		},300);
	},function(){
		$(this).animate({
			"width":40,
			"height":40
		},300);
	});

	$('.media_players').hover(function(){
		$('.frames').fadeIn('slow');
		$('.progresso-bar').fadeIn('slow');
		$('.media_players_controls').fadeIn('slow')
	}, function(){
		$('.frames').fadeOut('slow');
		$('.progresso-bar').fadeOut('slow');
		$('.media_players_controls').fadeOut('slow')
	});

	// apenas clicks de buttons e links setados

	$('.expand').bind('click', function(){
		$('.frames-modal').fadeIn('slow');
		$('.media_players').css('display','none');
	});

	$('.compress').bind('click', function(){
		$('.frames-modal').fadeOut('slow');
		$('.media_players').css('display','block');
	});

	$('.close_frame').bind('click', function(){
		$('.media_players').fadeOut('fast');
	});

	$('.bt').bind('click', function(){
		$('.view-image').fadeOut('fast');
	});
	
	$('.body-image').bind('click', function(){
		var imagem_home = $('body-image').find('img').attr('src');
		console.log(imagem_home);
		$('.view-image').fadeIn('fast');
		$('.modal_imagem img').attr('src', imagem_home);
	});
})