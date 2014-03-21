/**
 * jQuery.UiBeta-Tekstteller
 * Version 1.0
 * The MIT License (MIT)
 **/

(function($){
	$.fn.wordcounter = function(options) {
		var defaults = {
			limit: 100,
			message: ''
		};
		var options = $.extend(defaults, options);

		return this.each(function() {
			var obj, text, wordcount;

			obj = $(this);
			obj.after('<span id="wordcountertext"></span>');

			obj.keyup(function() {
				text = obj.val();
				if(text === "") {
					wordcount = 0;
				} else {
					wordcount = $.trim(text).split(" ").length;
				}
				if(wordcount > options.limit) {
					$('#wordcountertext').html(options.message);
					$('#wordcountertext').addClass('alert success radius label');
				}
			});
		});
	};
})(jQuery);
