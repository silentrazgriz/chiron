@php($options = $chiron['options'])
@php($id = 'dt-'.strtolower(str_replace(' ', '-', $chiron['title'])))
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                {{ $chiron['title'] }}
            </div>
            <div class="card-body">
                @include('chiron::components.header')
                <table id="{{ $id }}" class="data-table table table-hover mb-2">
                    @include('chiron::components.rows.header')
                    @include('chiron::components.rows.footer')
                </table>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        $(function() {
            $('#{{ $id }}').DataTable({
                'processing': true,
                'serverSide': true,
                'ajax': '{{ $chiron['source'] }}',
                'responsive': true,
                'columns': JSON.parse('{!! json_encode($chiron['fields']) !!}'),
            });
            @if(!isset($chiron['delete-script']))
                $('#{{ $id }}').on('draw', function () {
                    $('.delete-item').each((index, item) => {
                        item.addEventListener('click', (e) => {
                            let target = item.dataset.target;
                            $(target)[0].submit();
                        });
                    });
                });
                @php($chiron['delete-script'] = true)
            @endif
        });
    </script>
@append