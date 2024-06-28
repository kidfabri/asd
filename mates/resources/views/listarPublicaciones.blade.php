@include("estructura.header")

<h2>Publicaciones</h2>

@if(session('eliminado'))
    <b>Publicación eliminada</b> <br>
@endif

@if(session('modificado'))
    <b>Publicación modificada</b> <br>
@endif

<table>
    <tr>
        <th>Título</th>
        <th>Contenido</th>
        <th>Fecha de Creación</th>
    </tr>
    @foreach($publicaciones as $publicacion)
        <tr>
            <td>{{ $publicacion->titulo }}</td>
            <td>{{ $publicacion->contenido }}</td>
            <td>{{ $publicacion->created_at }}</td>
            <td><a href="/eliminar/{{ $publicacion->id }}">Eliminar</a></td>
            <td><a href="/modificar/{{ $publicacion->id }}">Modificar</a></td>
        </tr>
    @endforeach
</table>

@include("estructura.footer")
