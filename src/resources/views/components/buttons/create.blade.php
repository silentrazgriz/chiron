@if($options['actions']['store'])
    <a href="{{ $options['route']['create'] ?? route($options['route']['default'] . '.create') }}" class="btn btn-success text-white">
        <i class="fas fa-plus"></i> Create
    </a>
@endif
