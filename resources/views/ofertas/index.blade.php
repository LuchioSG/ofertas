<h1>Lista de ofertas</h1>

<a href="{{ route('ofertas.create') }}">Nueva oferta</a>

<table border="1">
<tr>
<th>Titulo</th>
<th>Tienda</th>
<th>Acciones</th>
</tr>

@foreach($ofertas as $oferta)
<tr>
<td>{{ $oferta->titulo }}</td>
<td>{{ $oferta->tienda }}</td>
<td>
<a href="{{ route('ofertas.show',$oferta->id) }}">Ver</a><br>
<a href="{{ route('ofertas.edit',$oferta->id) }}">Editar</a><br><br>

<form action="{{ route('ofertas.destroy',$oferta->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit">Eliminar</button>
</form>

</td>
</tr>
@endforeach
</table>