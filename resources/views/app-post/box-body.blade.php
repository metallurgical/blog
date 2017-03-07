<div class="box-body">

    <p>{{ $post->body }}</p>

    {{--<div class="attachment-block clearfix">--}}
        {{--<img class="attachment-img" src="/img/photo1.png" alt="Attachment Image">--}}

        {{--<div class="attachment-pushed">--}}
            {{--<h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>--}}

            {{--<div class="attachment-text">--}}
                {{--Description about the attachment can be placed here.--}}
                {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}

    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
    <span class="pull-right text-muted">
        {{ $post->comments->count()?  $post->comments->count().' comments' : ' ' }} </span>
</div>