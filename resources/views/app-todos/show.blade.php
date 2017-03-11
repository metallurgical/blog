@extends('master')

@section('master-content-body')

    <div class="box">

        <div class="box-body">

            <div class="row">
                <div class="col-xs-1">
                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                            <i class="fa fa-circle-o"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool"><i class="fa fa-times"></i></button>
                    </div>
                </div>

                <div class="col-xs-11">
                    <div class="row">
                        <a href="/todos/{{ $todo->id }}"><strong>{{ $todo->title }}</strong></a>
                    </div>

                    <div class="row">
                        <p>{{ $todo->body }}</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

@stop