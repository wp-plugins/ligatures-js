<?php

// Admin functions for ligatures-js plugin

function ligatures_admin_init() {
	register_setting('ligatures_options', 'ligatures_options', 'ligatures_options_validate' );
	add_settings_section('main_section', 'Settings', 'ligatures_options_info', __FILE__);
	add_settings_field('ligatures_textarea_string', 'CSS Selectors', 'ligatures_textarea', __FILE__, 'main_section');
}

function ligatures_admin_menu() {
	add_options_page('Ligatures', 'Ligatures', 'administrator', __FILE__, 'ligatures_admin_settings');
}

function ligatures_admin_settings() {
?>
	<div class="wrap">
		<div class="icon32" id="icon-options-general"><br></div>
		<h2>Ligatures</h2>
		Enter CSS/jQuery selectors for any text which should have ligatures. See the <a href="http://api.jquery.com/category/selectors/">jQuery documentation</a> for additional info.
		<form action="options.php" method="post">
		<?php settings_fields('ligatures_options'); ?>
		<?php do_settings_sections(__FILE__); ?>
		<p class="submit">
			<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
		</p>
		</form>
	</div>
<?php	
}

function ligatures_textarea() {
	$options = get_option('ligatures_options');
	echo "<textarea id='selectors' name='ligatures_options[selectors]' rows='7' cols='50' type='textarea'>{$options['selectors']}</textarea>";
}

function ligatures_options_validate($input) {
	// Check our textbox option field contains no HTML tags - if so strip them out
	$input['selectors'] =  wp_filter_nohtml_kses($input['selectors']);	
	return $input; // return validated input
}

add_action('admin_init', 'ligatures_admin_init');
add_action('admin_menu', 'ligatures_admin_menu');
