$('.za-uclisteto-content > ul > li').on('click', function(){
	if($(this).find('ul').css('display') == 'none'){
		$('.za-uclisteto-content > ul > li > ul').css('display', 'none');
		$(this).find('ul').css('display', 'block');
	} else {
		$('.za-uclisteto-content > ul > li > ul').css('display', 'none');
	}
});