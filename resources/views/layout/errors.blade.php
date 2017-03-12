@if(count($errors))

    <div class="box-body">

        <div class="callout callout-danger" style="margin-bottom: 0">
            <h4>Errors spotted!</h4>

            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        <p>{{ $error }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>

@endif