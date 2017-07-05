(function( $ ) {
	'use strict';

	$(document).on('ready', function BBRandomRowSelector() {
		var bb_random_row = Math.floor(Math.random() * $('.fl-row.bbrr-row').length);
		$('.fl-row.bbrr-row').hide().eq(bb_random_row).show();
	});

})( jQuery );
