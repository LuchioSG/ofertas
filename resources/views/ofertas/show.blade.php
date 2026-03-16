<h1>{{ $oferta->titulo }}</h1>

<p>Tienda: {{ $oferta->tienda }}</p>
<p>Vigencia: {{ $oferta->vigencia }}</p>
<p>Precio original: {{ $oferta->precio_original }}</p>
<p>Precio descuento: {{ $oferta->precio_descuento }}</p>

<a href="{{ route('ofertas.index') }}">Volver</a>