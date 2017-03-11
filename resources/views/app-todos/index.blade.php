@extends('master')

@section('master-content-body')

    <div class="box">

        @include('app-todos.layout.box-header')

        @foreach($todos as $todo)
            @include('app-todos.layout.box-body')
        @endforeach

    </div>

    @if( count($completedTodos) )

        <div class="box" style="background: rgb(210, 214, 222);">
            @foreach($completedTodos as $todo)
                @include('app-todos.layout.box-body')
            @endforeach
        </div>

    @else

        <div class="box">
            <div class="box-body">
                Empty completed
            </div>
        </div>

    @endif

@stop

@push('scripts')

    <script>

        $('.btn-delete').click(function(){
            var deleteId = $(this).attr('id').slice(7);

            $.ajax({
                method: "DELETE",
                headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}" },
                url: "/todos",
                data: {
                    deleteId : deleteId
                },
                success: function(response) {
                    console.log(response.message);
                    $('#'+ deleteId).fadeOut();
                },
                error: function(xhr) {
                    alert(xhr);
                }
            });
        });

        $('.btn-completed').click(function(){
            var comeletedId = $(this).attr('id').slice(10);

            $.ajax({
                method: "POST",
                headers: {'X-CSRF-TOKEN': "{{ csrf_token() }}" },
                url: "/todos/completed",
                data: {
                    comeletedId : comeletedId
                },
                success: function(response) {
                    console.log(response.message);
                    $('#'+ comeletedId).fadeOut();
                },
                error: function(xhr) {
                    alert(xhr);
                }
            });
        });

    </script>




@endpush



