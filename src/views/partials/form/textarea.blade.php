<div class="card-form">
    <fieldset>
        {!! Form::textarea($name, $value, $options) !!}
        <button data-js="submit-field" type="submit"><i class="fa fa-check"></i></button>
        <i class="fieldset-overlay" data-js="focus-on-field"></i>
    </fieldset>
</div>
