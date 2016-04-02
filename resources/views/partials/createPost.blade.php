
{!! Form::label('body', 'Body') !!}
{!! Form::textarea('body', $post->message, ['class' => 'form-control', 'id' => 'message']) !!}

{!! Form::label('tag', 'Tag') !!}
{!! Form::text('tag', $post->tag, ['class' => 'form-control', 'id' => 'message']) !!}

{!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}