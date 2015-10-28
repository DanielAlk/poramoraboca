$.fn.slider = function() {
	this.each(function() {
		var slider = this;
		var $slider = $(slider);
		var $slides = $slider.find('.slide');
		var $indicators = $slider.find('.slider-indicators>a').length ? $slider.find('.slider-indicators>a') : $slider.find('.slider-indicators-unstyled>a');
		var $titles = $slider.find('.slider-titles').children();
		var transition_is_active = false;

		var toggle = function(e) {
			$(this).toggleClass('active');
		};

		var toggleEnd = function(e) {
			$(this).toggleClass('active');
			transition_is_active = false;
		};

		var indicatorClickHandler = function(e) {
			e.preventDefault();
			if (transition_is_active) return;
			transition_is_active = true;
			var $this = $(this);
			var href = $this.attr('href');
			var $activeSlide = $slides.filter('.active');
			var $nextSlide = $slides.filter(href);
			var $nextTitle = $titles.filter('[data-for='+href+']');
			$activeSlide.fadeOut(toggle);
			$nextSlide.fadeIn(toggleEnd);
			$indicators.add($titles).removeClass('active');
			$this.add($nextTitle).addClass('active');
		};

		$indicators.click(indicatorClickHandler);
	});
}