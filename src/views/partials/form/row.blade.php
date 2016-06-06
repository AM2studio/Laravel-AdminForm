<div class="card-table-row @if(isset($options['rowClass'])) {{ $options['rowClass'] }} @endif">
    <span class="card-table-cell @if(isset($options['labelClass'])) {{ $options['labelClass'] }} @else fixed250 @endif">
        {{ $label }}
    </span>
    <div class="card-table-cell">
        {!! $element !!}
    </div>
</div>
