<div align="left">
	<div>
		{{Form::label('titulo','Título: ')}}
		{{Form::text('titulo') }}
	</div>
	<div>
		{{Form::label('descripcion','Descripción: ')}}
		{{Form::text('descripcion') }}
	</div>
	<div>
		{{Form::label('imagen','Imágen: ')}}
		{{Form::text('imagen') }}
	</div>
	<div>
		{{Form::label('contenido','Contenido: ')}}
		{{Form::textarea('contenido') }}
	</div>
	<div>
		{{Form::label('tags','Tags: ')}}
		{{Form::text('tags') }}
	</div>
	<div>
		{{Form::submit($submit_text) }}
	</div>
</div>