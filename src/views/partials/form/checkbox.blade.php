<div class="card-form">
    <fieldset class="checkbox-toggle">
        {!! Form::hidden($name, 0) !!}
        {!! Form::checkbox($name, $value, $checked, ['id' => $name]) !!}
        <label for="{{ $name }}"></label>
    </fieldset>
</div>
