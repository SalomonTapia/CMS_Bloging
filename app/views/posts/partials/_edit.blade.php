@section('main')
<h2>{{$post->titulo}}</h2>
<span>Por: {{$post->user->nombre}}</span>
<span>el: {{$post->created_at}}</span>
<p>
{{$post->contenido}}
</p>
<p><strong>Tags:</strong>{{$post->tags}}
</div>
<p>

<p>
</p>
@stop
<!--<div><h6><strong>Editar post</strong></h6></div>
	<div>
		<div>
			{{Form::label('titulo','Titulo: ')}}
			{{Form::text('titulo')}}
		</div>
		<div>
			{{Form::label('descipcion','Descripción: ')}}
			{{Form::text('descipcion')}}
		</div>
		<div>
			{{Form::label('imagen','Imágen: ')}}
			{{Form::text('imagen')}}
		</div>
		<div>
			{{Form::label('contenido','Contenido: ')}}
			{{Form::textarea('contenido')}}
		</div>
		<div>
			{{Form::label('tags','Tags: ')}}
			{{Form::text('tags')}}
		</div>
		<div>
			{{Form::submit($submit_text)}}
		</div>
	</div>-->