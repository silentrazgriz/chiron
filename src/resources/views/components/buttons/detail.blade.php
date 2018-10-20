@if($options['actions']['detail'])
    <a href="{{ (null == $options['route']['show'] ? route($options['route']['default'] . '.show', $collection['id']) : $options['route']['show'] . '/' . $collection['id']) }}"
       class="btn btn-sm btn-facebook">
        <i class="fas fa-info"></i> Detail
    </a>
@endif