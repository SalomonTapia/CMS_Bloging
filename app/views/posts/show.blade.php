@section('main')
<h2>Posts</h2>
@if ( !$post )
No se encontró la publicación
@else
<h2>{{ $post->titulo }}</h2>
<span>Fecha:{{ $post->created_at }}</span>
<p>
	{{ $post->contenido }}
</p>
<p><strong>Tags: </strong> {{ $post->tags }}
</p>
@endif
<p>
	<a href="{{ route('posts.index') }}">Volver a Posts</a>
</p>
@stop