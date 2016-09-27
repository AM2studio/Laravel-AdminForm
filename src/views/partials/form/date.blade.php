<div class="card-form">
    <fieldset>
        @php
            $valueConverted = $value == '' ? '' : $value->format('m/d/Y');
        @endphp
        {!! Form::hidden($name, $value, ['data-date-original' => true]) !!}
        {!! Form::input($type,  $name . '_converted', $valueConverted, $options) !!}
    </fieldset>
</div>
