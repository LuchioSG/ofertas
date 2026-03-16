<h1>Nueva Oferta</h1>

<form action="{{ route('ofertas.store') }}" method="POST">
@csrf

Titulo <br>
<input type="text" name="titulo"><br><br>

Vigencia <br>
<input type="date" name="vigencia"><br><br>

Tienda <br>
<input type="text" name="tienda"><br><br>

Precio original <br>
<input type="text" name="precio_original"><br><br>

Precio con descuento <br>
<input type="text" name="precio_descuento"><br><br>

<button type="submit">Guardar</button>

</form>