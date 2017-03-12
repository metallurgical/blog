@extends('master')

@section('master-content-body')

    <div class="box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Create Todo</h3>
        </div>

        @include('layout.errors')

        <form class="form-horizontal" action="/todos" method="POST">
            <div class="box-body">

                {{ csrf_field() }}

                <div class="form-group">
                    <label class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="todos here">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Body</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="body" placeholder="todos here">
                    </div>
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
            </div>
        </form>

    </div>

@stop