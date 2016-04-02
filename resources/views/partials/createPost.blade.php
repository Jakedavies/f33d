
{!! Form::label('message', 'Message') !!}
{!! Form::text('message', $post->message, ['class' => 'form-control', 'id' => 'message', 'maxlength' => '250']) !!}

{!! Form::label('tag', 'Tag') !!}
{!! Form::text('tag', $post->tag, ['class' => 'form-control', 'id' => 'tag']) !!}

{!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}