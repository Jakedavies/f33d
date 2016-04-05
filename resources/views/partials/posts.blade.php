@foreach($feed as $post)
    <div class="whitewash animatedParent">
        <div class="post " data-timestamp="{{$post->created_at}}">
                {{$post->message}}
        </div>
    </div>

@endforeach