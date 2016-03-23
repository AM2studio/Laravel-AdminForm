<div class="card-form">
    <fieldset class="checkbox-toggle">
        @if(!isset($options['ignore-hidden']))
            {!! Form::hidden($name, 0) !!}
        @endif
        {!! Form::checkbox($name, $value, $checked, $options) !!}
        <label for="{{ $options['id'] }}"></label>
    </fieldset>
</div>
