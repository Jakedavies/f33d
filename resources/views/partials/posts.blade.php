@foreach($feed as $post)
        <div class="post animated bounceInLeft" id="{{$post->created_at}}" data-timestamp="{{$post->created_at}}">
                {{$post->message}}
                {{$post->likes}}
        </div>
@endforeach