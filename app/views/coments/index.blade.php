@section('main')
<h2>Coments</h2>
@if (!$coments->count())
Aun  no se ha crreado Post en este blog, vuelve pronto
@else
<ul>
	@foreach($coments as $coment)
	<li>
		<a href="{{route('coments.show',$coment->id)}}">
		<strong>{{$coment->titulo}}</strong></a>
		<p>{{$coment->comentario}}</p>
		<p>{{$coment->id}}</p>
	</li>
	@endforeach
</ul>
@endif
<p></p>
{{link_to_route('coments.create','Crear comentario')}}
@stop