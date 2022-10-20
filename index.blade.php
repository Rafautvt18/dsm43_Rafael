<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/usuarios.css') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Usuarios</title>
</head>
<body>

    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">
            <img src= alt="" width="40" height="24" class="d-inline-block align-text-top">
            
            <label for="">iShell</label>
            </a>

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
    </nav>

    <br>
    <div class="container">
        <div class="col-auto my-1">
            <a href="{{ route('usuarios.create') }}" type="button" class="btn btn-outline-primary">Crear</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        <th>Id</th>
                        <th>Matricula</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Fecha de nacimiento</th>
                        <th>Genero</th>
                        <th>Foto Nombre</th>
                        <th>Foto</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Nivel</th>
                        <th>Activo</th>
                        <th>Accciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>


                        <td>{{$usuario->id_usuario}}</td>
                        <td>{{$usuario->clave}}</td>
                        <td>{{$usuario->nombre}}</td>
                        <td>{{$usuario->apellido_p}}</td>
                        <td>{{$usuario->apellido_m}}</td>
                        <td>{{$usuario->fecha_nacimiento}}</td>
                        <td>{{$usuario->genero}}</td>
                        <td>{{$usuario->foto}}</td>
                       
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->pass}}</td>
                        <td>
                            @if ($usuario->nivel == 1)
                                Admin
                            @elseif ($usuario->nivel == 2)
                                Empleado
                            @else
                                Usuario
                            @endif
                        </td>
                        <td>
                            @if ($usuario->activo == 1)
                                Activo
                            @else
                                Inactivo
                            @endif
                        </td>
                        <td>
                            <a href="{{route('usuarios.edit', $usuario->id_usuario)}}" class="btn btn-warning btn-sm">Editar</a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$usuario->id_usuario}}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('usuarios.delete')
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $usuarios->links() }}
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>