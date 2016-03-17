<div class="card-form">
    <fieldset class="checkbox-toggle">
        {!! Form::hidden($name, 0) !!}
        {!! Form::checkbox($name, $value, $checked, ['id' => $options['id']]) !!}
        <label for="{{ $options['id'] }}"></label>
    </fieldset>
</div>
