<div class="card-form">
   <fieldset>
       <div class="input-group">
           @php 
               $valueFormated = ( isset($options['forceFloat']) && $options['forceFloat']==true ) ? floatval($value) : $value; 
           @endphp
           @if( isset($options['icon_prefix']) ) <div class="input-group__addon"><span class="fa {{ $options['icon_prefix'] }}"></span></div>@endif
            {!! Form::number($name, $valueFormated, $options) !!}
            <button data-js="submit-field" type="submit"><i class="fa fa-check"></i></button>
            <i class="fieldset-overlay" data-js="focus-on-field"></i>
            @if( isset($options['icon_suffix']) ) <div class="input-group__addon"><span class="fa {{ $options['icon_suffix'] }}"></span></div>@endif
        </div>
   </fieldset>
</div>