// Add your custom JS here.

(function($){
	$('body').on('mouseenter mouseleave','.dropdown',function(e){
	  var _d=$(e.target).closest('.dropdown');_d.addClass('show');
	  setTimeout(function(){
	    _d[_d.is(':hover')?'addClass':'removeClass']('show');
	    $('[data-toggle="dropdown"]', _d).attr('aria-expanded',_d.is(':hover'));
	  },300);
	});

	$('.navbar .dropdown > a').click(function(){
		location.href = this.href;
	});
});

