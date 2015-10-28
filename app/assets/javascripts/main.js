$.fn.slider = function() {
	this.each(function() {
		var slider = this;
		var $slider = $(slider);
		var $slides = $slider.find('.slide');
		var $indicators = $slider.find('.slider-indicators>a');
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
			var $activeSlide = $slides.filter('.active');
			var $nextSlide = $slides.filter($this.attr('href'));
			$activeSlide.fadeOut(toggle);
			$nextSlide.fadeIn(toggleEnd);
			$indicators.removeClass('active');
			$this.addClass('active');
		};

		$indicators.click(indicatorClickHandler);
	});
}