<?php
    preg_match_all('/id="([^"]+)"/', $element, $names);
    $name = count($names[1]) > 0 ? $names[1][0] : '';

    preg_match_all('/required="required"/', $element, $names);
    $required = count($names[0]) > 0 ? true : false;
?>

<div class="card-table-row @if(isset($options['rowClass'])) {{ $options['rowClass'] }} @endif @if($required) required @endif">
    <label
		for="{{ $name }}"
		class="card-table-cell @if(isset($options['labelClass'])) {{ $options['labelClass'] }} @else fixed250 @endif @if(isset($options['labelTooltip'])) tooltip @endif" 
		@if(isset($options['labelTooltip'])) title="{{ $options['labelTooltip'] }}" @endif>
        @if($required) <span class="asterix">*</span> @endif {{ $label }}
    </label>
    <div class="card-table-cell">
        {!! $element !!}
    </div>
</div>