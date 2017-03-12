
    <div class="box-body" id="{{ $todo->id }}">

        <div class="row">

            <div class="col-xs-10">
                <a href="/todos/{{ $todo->id }}"><strong>{{ $todo->title }}</strong></a>
                <p>{{ $todo->body }}</p>
            </div>

            <div class="col-xs-2">
                <div class="box-tools pull-right">

                    @if(!$todo->completed)
                        <button class="btn btn-box-tool btn-delete" id="delete-{{ $todo->id }}">
                            <i class="fa fa-times"></i>
                        </button>

                        <button type="button" class="btn btn-box-tool btn-completed" data-toggle="tooltip" title="Mark as read" id="completed-{{ $todo->id }}">
                            <i class="fa fa-circle-o"></i>
                        </button>

                        <a href="/todos/{{ $todo->id }}/edit" class="btn btn-box-tool"><i class="fa fa-pencil"></i></a>
                    @endif

                </div>
            </div>

        </div>

    </div>

    <hr style="margin: 0;"/>

