 <div align="center"><h7>Editar post</h7></div>
 <div align="left">
	<div>
		{{Form::label('comentario','Titulo: ')}}
		{{Form::textarea('comentario') }}
	</div>
	<div>
		{{Form::submit($submit_text)}}
	</div>
</div>