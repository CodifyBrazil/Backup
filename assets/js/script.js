$(function(){
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
	})
})