(function($) {
    var $window = $(window),
        $slide = $('#slides');
        $botones = $('#botones');

    function resize() {
        if ($window.width() > 1500) {
			$slide.removeClass('container-fluid');
            return $slide.addClass('container');
        }else{
			$slide.removeClass('container');
			return $slide.addClass('container-fluid')
        }

    }

    function resize2() {
        if ($window.width() > 1500) {
            return $botones.addClass('container');
        }else{
			return $botones.removeClass('container')
        }

    }

    $window
        .resize(resize)
        .trigger('resize');
})(jQuery);