<div class="form-group">
	{{Form::label('comentario','Comentario: ', array('class' => 'control-label')) }}
	{{Form::textarea('comentario', null, array('class' => 'form-control')) }}
</div>
<div class="form-actions">
	{{Form::submit($submit_text,array('class' => 'btn btn-primary')) }}
</div>