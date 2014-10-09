@section('main')
<h2>Nuevo Post</h2>

{{Form::model(new Post, ['route'=>['posts.store']]) }}
@include('posts/partials/_edit',['submit_text'=>'Actualizar'])
{{Form::close()}}

@stop