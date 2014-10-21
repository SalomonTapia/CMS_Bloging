	<div class="form-group">
		{{Form::label('titulo','Título: ', array('class' => 'control-label') )}}
		{{Form::text('titulo', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{Form::label('descripcion','Descripción: ')}}
		{{Form::text('descripcion',null, array('class' => 'form-control'))  }}
	</div>
	<div class="form-group">
		{{Form::label('imagen','Imágen: ')}}
		{{Form::text('imagen', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{Form::label('contenido','Contenido: ')}}
		{{Form::textarea('contenido', null, array('class' => 'form-control'))  }}
	</div>
	<div class="form-group">
		{{Form::label('tags','Tags: ')}}
		{{Form::text('tags', null, array('class' => 'form-control'))  }}
	</div>
	<div class="form-actions">
		{{Form::submit($submit_text, array('class' => 'btn btn-primary')) }}
	</div>