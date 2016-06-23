<?php
    $optionsForm = [];
    if (isset($options['form'])) {
        $optionsForm['form'] = $options['form'];
    }
?>
<div class="card-form">
    <fieldset class="checkbox-toggle">
        @if(!isset($options['ignore-hidden']))
            {!! Form::hidden($name, 0, $optionsForm) !!}
        @endif
        @if( isset($options['repeater']) )
            {!! Form::checkbox($name, $value, $checked, array_merge($options, ['data-repeater-randomize'=>'id'] ) ) !!}
        @else
            {!! Form::checkbox($name, $value, $checked, $options) !!}
        @endif
        <label for="{{ $options['id'] }}" @if( isset($options['repeater']) ) data-repeater-randomize="for" @endif ></label>
    </fieldset>
</div>
