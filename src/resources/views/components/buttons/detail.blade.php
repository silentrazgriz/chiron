@if($options['actions']['detail'])
    <a href="{{ $options['route']['show'] ?? route($options['route'] . '.show', $collection['id']) }}"
       class="btn btn-sm btn-facebook">
        <i class="fas fa-info"></i> Detail
    </a>
@endif