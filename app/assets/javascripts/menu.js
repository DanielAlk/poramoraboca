$(function() {
	var $container = $('header .menu');
	var $nav = $container.find('nav');
	var $toggle = $('header .menu-button a');
	var activate = function(element) { $nav.add(element).addClass('active'); };
	var deactivate = function(element) { $nav.add(element).removeClass('active'); };
	var switchOn = function(element) { 
		$container.fadeIn();
		$nav.show('slide', { direction: 'left' }, function() {
			activate(element)
		});
	};
	var switchOff = function(element) {
		$container.fadeOut();
		$nav.hide('slide', { direction: 'left' }, function() {
			deactivate(element)
		});
	};
	var toggle = function(e) {
		var element = this;
		if ($nav.hasClass('active')) switchOff(element);
		else switchOn(element);
	};
	$(document).on('click', function(e) {
		if ($(e.target).parents('nav').length || $(e.target).is('nav') || $(e.target).is($toggle)) return;
		if ($nav.hasClass('active')) switchOff($toggle);
	});
	$toggle.click(toggle);
	MEDIA.addListener(function(e, mq) {
		console.log(mq);
	}, $('header').get(0));
});