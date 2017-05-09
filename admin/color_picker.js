jQuery(document).ready(function($){

	function aas_admin_color_change() {
		setTimeout(function() {

			$('#agatha-advanced-search_custom_width').val(
				Math.abs(parseInt($('#agatha-advanced-search_custom_width').val(), 10))
			);

			var input = $(this),
			preview = $('.aas_search_results');

			$('#aas_custom_styles').remove();

			var styles =
				['.aas_search_results {',
				'  width: ' + $('#agatha-advanced-search_custom_width').val() + 'px;',
				'}',
				'.aas_search_results li {',
				'  color: ' + $('#agatha-advanced-search_custom_fg').val() + ';',
				'  background-color: ' + $('#agatha-advanced-search_custom_bg').val() + ';',
				'}',
				'.aas_search_footer {',
				'  background-color: ' + $('#agatha-advanced-search_custom_footbg').val() + ';',
				'}',
				'.aas_search_footer a,',
				'.aas_search_footer a:visited {',
				'  color: ' + $('#agatha-advanced-search_custom_footfg').val() + ';',
				'}',
				'.aas_search_results li a, .aas_search_results li a:visited {',
				'  color: ' + $('#agatha-advanced-search_custom_title').val() + ';',
				'}',
				'.aas_search_results li:hover',
				'{',
				'  background-color: ' + $('#agatha-advanced-search_custom_hoverbg').val() + ';',
				'}',
				'.aas_search_results li',
				'{',
				'  border-bottom: 1px solid ' + $('#agatha-advanced-search_custom_divider').val() + ';',
				'}'];

			// Optional drop shadow
			if($('#agatha-advanced-search_custom_shadow:checked').length > 0) {
			styles.push(['.aas_search_results {',
							'-moz-box-shadow: 5px 5px 3px #222;',
							'-webkit-box-shadow: 5px 5px 3px #222;',
							'box-shadow: 5px 5px 3px #222;',
							'}'].join("\n"));
			}

			$('body').append('<style type="text/css" id="aas_custom_styles">' + styles.join("\n") + '</style>');

		}, 0);
	}

	$('.aas_color_picker, .aas_design_toggle, #agatha-advanced-search_custom_width').change(aas_admin_color_change);
    $('.aas_color_picker').wpColorPicker({change: aas_admin_color_change});
    aas_admin_color_change();

    $('input[name="agatha-advanced-search_css"]').change(function() {
		if($(this).val() === 'custom') {
			$('#custom_colors').slideDown();
		}
		else {
			$('#custom_colors').slideUp();
		}
    });
    if($('input[name="agatha-advanced-search_css"]').filter('[value=custom]:checked').length > 0) {
		$('#custom_colors').show();
    }
});