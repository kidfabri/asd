@include("estructura.header")

<h2>Crear Publicación</h2>

<form action="/publicacion" method="post">
    @csrf
    Título <input type="text" name="titulo"> <br>
    Contenido <input type="text" name="contenido"> <br>
    <input type="submit" value="Crear">
</form>

@if(session('mensaje'))
    @if(session('resultado') == true)
        <h2 style="color: green">Éxito</h2>
    @endif
    <p>{{ session('mensaje') }}</p>
@endif

@include("estructura.footer")
