@section('main')
<div align="center">
<h2>{{$post->titulo}}</h2>
<span>Por: {{$post->user->nombre}}
el {{$post->created_at}}</span>
<p>
{{$post->contenido}}
</p>
<p><strong>Tags:</strong>{{$post->tags}}
</div>
<p>
	<div align="center">
		@foreach($post->comments as $coment)
		<div style="border: 1px solid #ccc; margin-botton:4px;">
			<span>Por: {{$coment->user->nombre}} el {{$coment->created_at}}</span>
			<p>
				{{$coment->comentario}}
			</p>
		</div>
		@endforeach
	</div>

	<p></p><div align="center"><h3><strong>Agregar nuevo comentario</strong></h3></div><p></p>

	<div align="center">
		@include('coments/partials/_coment')
	</div>
<p>
{{link_to_route('posts.index','Volver a Post')}}<p>
{{link_to_route('posts.edit','Editar post')}}
</p>
@stop