<div class="form">
    <fieldset class="radio-default">
        {!! Form::radio($name, $value, $checked, $options) !!}
        @if(isset($options['id']))
            <label for="{{ $options['id'] }}">
                <i></i>
            </label>
        @endif
    </fieldset>
</div>
