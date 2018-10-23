<td>
    {{ $field['prefix'] ?? '' }} {{ data_get($collection, $field['key']) }} {{ $field['suffix'] ?? '' }}
</td>