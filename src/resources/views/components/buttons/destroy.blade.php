@if($options['actions']['destroy'])
    <a
        class="btn btn-sm btn-danger delete-item text-white"
        data-target="#delete-{{ $collection['id'] }}"
    ><i class="far fa-trash-alt"></i> Destroy</a>
@endif