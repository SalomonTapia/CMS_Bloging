@section('main')
<h2>Nuevo Comentario</h2>

{{Form::model(new Post, ['route'=>['coments.store']]) }}
@include('coments/partials/_form',['submit_text'=>'Comentar'])
{{Form::close()}}
@stop