<h1>Editar oferta</h1>

<form action="{{ route('ofertas.update',$oferta->id) }}" method="POST">
@csrf
@method('PUT')

Titulo: <input type="text" name="titulo" value="{{ $oferta->titulo }}"><br>
Vigencia: <input type="date" name="vigencia" value="{{ $oferta->vigencia }}"><br>
Tienda: <input type="text" name="tienda" value="{{ $oferta->tienda }}"><br>
Precio original: <input type="text" name="precio_original" value="{{ $oferta->precio_original }}"><br>
Precio con descuento: <input type="text" name="precio_descuento" value="{{ $oferta->precio_descuento }}"><br>

<button type="submit">Actualizar</button>

</form>