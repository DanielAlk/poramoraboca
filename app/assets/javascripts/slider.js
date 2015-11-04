$.fn.slider = function(delay) {
	this.each(function() {
		var slider = this;
		var $slider = $(slider);
		var $slides = $slider.find('.slide');
		var $indicators = $slider.find('.slider-indicators>a').length ? $slider.find('.slider-indicators>a') : $slider.find('.slider-indicators-unstyled>a');
		var $titles = $slider.find('.slider-titles').children();
		var transition_is_active = false;
		var timer_is_active = false;
		var use_timer = Boolean(delay);
		var timer;

		var pauseWhileTransition = function() { transition_is_active = true; };

		var resumeAfterTransition = function() { transition_is_active = false; };

		var setTimer = function() {
			if (use_timer && !timer_is_active) {
				timer_is_active = true;
				timer = setInterval(interval, delay);
			};
		};

		var unsetTimer = function() {
			if (use_timer && timer_is_active) {
				timer_is_active = false;
				clearInterval(timer);
			};
		};

		var toggle = function(e) {
			$(this).toggleClass('active');
		};

		var toggleEnd = function(e) {
			$(this).toggleClass('active');
			resumeAfterTransition();
			setTimer();
			$(document).trigger('slider.end', slider);
		};

		var showSlide = function(href) {
			var $activeSlide = $slides.filter('.active');
			var $nextSlide = $slides.filter(href);
			var $nextTitle = $titles.filter('[data-for='+href+']');
			$activeSlide.fadeOut(toggle);
			$nextSlide.fadeIn(toggleEnd);
			$indicators.add($titles).removeClass('active');
			$indicators.filter('[href='+href+']').add($nextTitle).addClass('active');
		};

		var indicatorClickHandler = function(e) {
			e.preventDefault();
			if (transition_is_active) return;
			pauseWhileTransition();
			unsetTimer();
			var $this = $(this);
			var href = $this.attr('href');
			showSlide(href);
		};

		var interval = function() {
			if (transition_is_active) return;
			pauseWhileTransition();
			var href;
			var $active = $slides.filter('.active');
			if ($active.is($slides.last())) href = '#' + $slides.first().attr('id');
			else href = '#' + $active.next().attr('id');
			showSlide(href);
		};

		$indicators.click(indicatorClickHandler);
		setTimer();
	});
};