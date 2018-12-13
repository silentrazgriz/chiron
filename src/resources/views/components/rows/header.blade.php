<thead>
<tr>
    @foreach($chiron['fields'] as $field)
        <th scope="col">{{ ucwords($field['label']) }}</th>
    @endforeach
</tr>
</thead>