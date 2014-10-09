@section('main')
<h2>Posts</h2>
@if (!$posts->count())
Aun  no se ha crreado Post en este blog, vuelve pronto
@else
<ul>
	@foreach($posts as $post)
	<li>
		<a href="{{route('posts.show',$post->id)}}">
		<strong>{{$post->titulo}}</strong>
		<p>{{$post->descripcion}}</p></a>
	</li>
	@endforeach
</ul>
@endif
{{link_to_route('posts.create','Nuevo post')}}
@stop