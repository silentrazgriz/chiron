<td>
    {{ $field['prefix'] ?? '' }} {{ date('d-m-Y', strtotime(data_get($collection, $field['key']))) }} {{ $field['suffix'] ?? '' }}
</td>