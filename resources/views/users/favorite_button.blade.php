@if (Auth::user()->is_like($micropost->id))
    {!! Form::open(['route' => ['favorites.unlike', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unlike', ['class' => "btn btn-primary btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorites.like', $micropost->id]]) !!}
        {!! Form::submit('Like', ['class' => "btn btn-success btn-sm"]) !!}
    {!! Form::close() !!}
@endif
