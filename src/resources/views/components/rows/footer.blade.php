<tfoot>
<tr>
    @foreach($chiron['fields'] as $field)
        <th scope="col">{{ ucwords($field['label']) }}</th>
    @endforeach
    @if(
        $options['actions']['detail'] ||
        $options['actions']['update'] ||
        $options['actions']['destroy']
    )
        <th scope="col" class="action text-center">Action</th>
    @endif
</tr>
</tfoot>