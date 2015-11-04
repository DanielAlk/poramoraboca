/* REQUIRES media.js, jquery.mousewheel.js and jquery-draggable.min.js  */
$.fn.scrollWindow = function(options) {
	if (options && options.device != 'desktop') return;
	var default_options = {
		update: function(update_function) {
			update_function();
		}
	};
	options = typeof options === 'object' ? options : (function() {
		if (typeof options === 'function') default_options.update = options;
		return default_options;
	}());

	options.update = options.update || default_options.update;

	this.each(function() {
		var $this = $(this);
		var $scroll_bar = $this.find('.scroll-bar');
		var $indicator = $scroll_bar.children('span');
		var $page = $($this.data('page'));
		var $modal = $this.data('modal') && $($this.data('modal'));
		var page_height, overflow, scroll_bar_height, scroll_bar_usable_height, indicator_height, ind_max_height, ind_min_height;
		
		var move = function(e) {
			var top = Number($indicator.css('top').replace('px', '')) * overflow / scroll_bar_usable_height;
			$page.scrollTop(top);
		}

		var update = function(e, mq) {
			if (typeof mq !== 'object') $indicator.css('top', 0);
			$scroll_bar.attr('style','');
			page_height = $page.height();
			overflow = $page.get(0).scrollHeight - page_height;
			scroll_bar_height = $scroll_bar.height();
			indicator_height = scroll_bar_height - (overflow * scroll_bar_height / page_height);
			ind_max_height = 90 * scroll_bar_height / 100;
			ind_min_height = 10 * scroll_bar_height / 100;
			indicator_height = (indicator_height < ind_min_height) ? ind_min_height : (indicator_height > ind_max_height) ? ind_max_height : indicator_height;
			scroll_bar_usable_height = scroll_bar_height - indicator_height;
			if (overflow) {
				move();
				$indicator.css('top', $page.scrollTop() * scroll_bar_usable_height / overflow);
				$indicator.height(indicator_height);
			}
			else {
				$scroll_bar.hide();
				$page.scrollTop(0);
			}
		}

		if(!options.device || options.device == 'desktop') {
			$indicator.draggable({ containment: $scroll_bar, scroll: false, opacity: 0.5, helper: function(e) {
				$(document).on('mousemove', move);
				return this;
			}});
			$(document).mouseup(function(e) {
				$(document).off('mousemove', move);
			});
			$page.on('mousewheel', function(e) {
				e.preventDefault();
				var delta = e.deltaY * e.deltaFactor;
				$page.scrollTop($page.scrollTop()-delta);
				$indicator.css('top', $page.scrollTop() * scroll_bar_usable_height / overflow);
			})
			.css('overflow','hidden');
		}
		else {
			$page.css('overflow', 'scroll');
			$page.on('scroll', function(e) {
				$indicator.css('top', $page.scrollTop() * scroll_bar_usable_height / overflow);
			});
		};
		if ($modal && $modal.length) {
			$modal.on('shown.bs.modal', update);
		};
		$(window).load(function() {
			options.update(update);
			typeof $page !== 'undefined' || update();
		});
		$(document).on('slider.end', update);
		MEDIA.addListener(update, $this.get(0));
	});
};