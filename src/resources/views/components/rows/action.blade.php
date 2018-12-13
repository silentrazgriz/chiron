@if(
    $options['actions']['detail'] ||
    $options['actions']['update'] ||
    $options['actions']['destroy']
)
    <div class="btn-group" role="group">
        @include('chiron::components.buttons.detail')
        @include('chiron::components.buttons.update')
        @include('chiron::components.buttons.destroy')
    </div>
    @include('chiron::components.buttons.destroy-form')
@endif