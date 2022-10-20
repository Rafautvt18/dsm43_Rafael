<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/Tiendas.css') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Tiendas</title>
</head>
<body>

    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">
            <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="40" height="24" class="d-inline-block align-text-top">
            
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
            <a href="{{ route('tiendas.create') }}" type="button" class="btn btn-outline-primary">Crear</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        <th>Id</th>
                        
                        <th>Clave</th>
                        <th>Nombre</th>
                       <th>Acciones</th>
                       
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tiendas as $tienda)
                    <tr>


                        <td>{{$tienda->id_tienda}}</td>
                        <td>{{$tienda->clave}}</td>
                        <td>{{$tienda->nombre}}</td>
                       
                       
                        
                       
                        </td>
                        <td>
                            <a href="{{route('tiendas.edit', $tienda->id_tienda)}}" class="btn btn-warning btn-sm">Editar</a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$tienda->id_tienda}}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('tiendas.delete')
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $tiendas->links() }}
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>