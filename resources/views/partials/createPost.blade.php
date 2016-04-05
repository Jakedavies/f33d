
{!! Form::label('message', 'Message') !!}
{!! Form::text('message', $post->message, ['class' => 'form-control', 'id' => 'message', 'maxlength' => '255']) !!}

{!! Form::label('tag', 'Tag') !!}
{!! Form::text('tag', $post->tag, ['class' => 'form-control', 'id' => 'tag']) !!}

{!! Form::submit('Shout it to the Universe!', array('class' => 'btn btn-primary')) !!}