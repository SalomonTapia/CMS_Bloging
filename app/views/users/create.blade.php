@section('main')
<h2>{{$user->nombre}}</h2>
<span>Por:{{$post->user->nombre}}
el {{$user->created_at}}</span>
<p>
{{$user->nombre}}
</p>
<p><strong>Tags:</strong>{{$user->rol}}
<p>

<p>
{{link_to_route('users.index','Volver a User')}}
</p>
@stop