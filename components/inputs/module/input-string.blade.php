<?php
	// init component

	// UI
	$ui_label 		= isset($style['label']) ? $style['label'] : str_replace("_", " ", $data['name']);
	$ui_class 		= isset($style['class']) ? $style['class'] : '';
	$ui_placeholder = isset($style['placeholder']) ? $style['placeholder'] : '';
	$ui_default 	= isset($style['default']) ? $style['default'] : '';
?>

<div class="form-group">
	<label 
		for="{{ $data['name'] }}"
		class="thunder_input_label"
	>
		{{ $ui_label }}
	</label>
	<input 
		id="{{ 'thunder_input_string_' . $data['name'] . $index }}" 
		name="{{ $data['name'] }}" 
		value="{{ $data['value'] }}" 
		class="form-control thunder_input $ui_class" 
		placeholder="{{ $ui_placeholder }}"
		type="text" 
	>
</div>