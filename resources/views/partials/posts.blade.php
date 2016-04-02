@foreach($feed as $post)
    <div class="post" data-timestamp="{{$post->created_at}}">
        {{$post->message}}
    </div>
@endforeach