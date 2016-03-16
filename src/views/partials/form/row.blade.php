<div class="card-table-row">
    <span class="card-table-cell @if(isset($options['labelClass'])) {{ $options['labelClass'] }} @else fixed25 @endif">
        {{ $label }}
    </span>
    <div class="card-table-cell">
        {!! $element !!}
    </div>
</div>
