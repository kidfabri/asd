@include("estructura.header")

<h2>Modificar Publicación</h2>

<form action="/modificar" method="post">
    @csrf
    Id <input type="text" disabled name="id" value="{{ $publicacion->id }}"> <br>
    Título <input type="text" name="titulo" value="{{ $publicacion->titulo }}"> <br>
    Contenido <input type="text" name="contenido" value="{{ $publicacion->contenido }}"> <br>
    <input type="submit" value="Modificar">
</form>

@include("estructura.footer")
