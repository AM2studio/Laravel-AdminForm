<div class="card-form">
    <fieldset class="checkbox-toggle">
        @if(!isset($options['ignore-hidden']))
			<input name="{{ $name }}" type="hidden" value="0" @if(isset($options['form'])) form="{{ $options['form'] }}" @endif ></input>
        @endif
        @if( isset($options['repeater']) )
            {!! Form::checkbox($name, $value, $checked, array_merge($options, ['data-repeater-randomize'=>'id'] ) ) !!}
        @else
            {!! Form::checkbox($name, $value, $checked, $options) !!}
        @endif
        <label for="{{ $options['id'] }}" @if( isset($options['repeater']) ) data-repeater-randomize="for" @endif ></label>
    </fieldset>
</div>
