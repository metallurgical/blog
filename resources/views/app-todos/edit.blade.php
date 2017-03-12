@extends('master')

@section('master-content-body')

    <div class="box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Edit Todo : {{ $todo->title }}</h3>
        </div>

        @include('layout.errors')

        <div class="box-body">

            {{ Form::open(['method' => 'PUT', 'url' => ['/todos',  $todo->id] ]) }}

            <div class="form-group">
                {{ Form::label('name', 'Title') }}
                {{ Form::text('title', $todo->title, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('Body', 'Body') }}
                {{ Form::text('body', $todo->body, array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}

        </div>

        {{--<form class="form-horizontal" action="/todos/{{ $todo->id }}" method="PUT">--}}
            {{--<div class="box-body">--}}

                {{--<div class="form-group">--}}
                    {{--<label class="col-sm-2 control-label">Title</label>--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<input type="text" class="form-control" name="title" value="{{ $todo->title }}" placeholder="todos here">--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label class="col-sm-2 control-label">Body</label>--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<input type="text" class="form-control" name="body" value="{{ $todo->body }}" placeholder="todos here">--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

            {{--<div class="box-footer">--}}
                {{--<button type="submit" class="btn btn-default">Cancel</button>--}}
                {{--<button type="submit" class="btn btn-info pull-right">Submit</button>--}}
            {{--</div>--}}
        {{--</form>--}}

    </div>

@stop