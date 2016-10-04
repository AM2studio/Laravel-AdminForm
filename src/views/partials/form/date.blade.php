<div class="card-form">
    <fieldset>
        @php
            if(Form::getValueAttribute($name, null) !== null){
                $value = Form::getValueAttribute($name, null);
            }

            if ($value instanceof Carbon\Carbon) {
               $valueFormated = $value == '' ? '' : $value->format('m/d/Y');
            }else{
                $valueFormated = $value;
            }
        @endphp
        <input class="datepicker" name="{{$name}}_converted" type="date-format" value="{{ $valueFormated }}">
        <input data-date-original="1" name="{{ $name }}" type="hidden" value="{{ $value }}">
    </fieldset>
</div>
