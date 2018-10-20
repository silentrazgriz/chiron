@if($options['actions']['destroy'])
    <form
        method="POST"
        action="{{ (null == $options['route']['destroy'] ? route($options['route']['default'] . '.destroy', $collection['id']) : $options['route']['destroy'] . '/' . $collection['id']) }}"
        id="delete-{{ $collection['id'] }}"
    >
        @csrf
        <input type="hidden" name="_method" value="DELETE"/>
    </form>
@endif