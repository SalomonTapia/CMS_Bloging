@section('main')
<font color="red">
	<h2>{{$post->titulo}}</h2>
</font>
<strong>
	<span>
		Por:{{$post->user->nombre}} el {{$post->created_at}}
	</span>
</strong>
<p>
	{{$post->contenido}}
</p>
<p>
	<strong>Tags:</strong>
	{{$post->tags}}
</p>
<!--Comienza-->	
	<div align="left" style="border: 3px solid green; margin-botton:1px;">
		@foreach($post->comments as $coment)
		<div>
			<strong><span>Por: {{$coment->user->nombre}} el {{$coment->created_at}}</span></strong>
			<p></p>
			<p align="left">
				{{$coment->comentario}}
			</p>
			<div align="center">
				{{link_to_route('coments.destroy','Eliminar Comentario')}}
			</div>
		</div>
		@endforeach
	</div>
<!--Termina-->	
	<div align="center">
		<h3>
			<strong>Agregar nuevo comentario</strong>
		</h3>
	</div>
	<div align="center">
		@include('coments/partials/_coment')
	</div>
<p align="center">
	{{link_to_route('posts.index','Volver a Post')}}
</p>
<p>
	{{link_to_route('posts.edit','Editar post', $post->id)}}
</p>
@stop