@section('main')
<h2>{{$post->titulo}}</h2>
<span>Por:{{$post->user->nombre}}
el {{$post->created_at}}</span>
<p>
{{$post->contenido}}
</p>
<p><strong>Tags:</strong>{{$post->tags}}
<p>
<p>
	<div align="center">
		@foreach($post->comments as $coment)
		<div style="border: 1px solid #ccc; margin-botton:4px;">
			<span>Por: {{$coment->user->nombre}} el {{$coment->created_at}}</span>
			<p align="center">
				{{$coment->comentario}}
			</p>
		</div>
		@endforeach
	</div>
		
		
		<p></p><div align="center"><h3><strong>Agregar nuevo comentario</strong></h3></div><p></p>
		
		<div align="center">
		@include('coments/partials/_coment')
		</div>
	
</p>
<p align="center">
{{link_to_route('posts.index','Volver a Post')}}<p></p>
</p>
@stop
