<td class="text-right">
    {{ $field['prefix'] ?? '' }} {{ number_format(data_get($collection, $field['key']), 3) }} {{ $field['suffix'] ?? '' }}
</td>