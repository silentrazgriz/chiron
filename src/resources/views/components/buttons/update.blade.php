@if($options['actions']['update'])
    <a href="{{ $options['route']['update'] ?? route($options['route'] . '.edit', $collection['id']) }}"
       class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a>
@endif