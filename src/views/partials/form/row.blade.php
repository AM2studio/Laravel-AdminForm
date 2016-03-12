<tr @if(isset($options['rowClass'])) class="{{ $options['rowClass'] }} @endif">
    <td @if(isset($options['labelClass'])) class="{{ $options['labelClass'] }} @endif">
        {{ $label }}
    </td>
    <td @if(isset($options['labelClass'])) class="{{ $options['elementClass'] }} @endif">
        {!! $element !!}
    </td>
</tr>
