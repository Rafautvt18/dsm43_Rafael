<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Editar Tiendas</title>
</head>
<body>
    <br>
    <div class="container">
        <h4>Tienda</h4>

        <div class="row">
            <div class="col-xl-12">
        <!--Formulario de usuarios-->        
                <form action="{{ route('tiendas.update', $tienda->id_tienda) }}" method="POST">
                    @csrf
                    @method ('PUT')

                    <div class="form-group">
                            <label for="clave">id_tienda</label>
                            <input type="text" class="form-control" name="clave" required maxlength="9" value="{{ old('clave') }}">
                            @if ($errors->has('id_tienda'))
                                <span class="error text-danger" for="input-clave">{{ $errors->first('id_tienda')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="clave">clave</label>
                            <input type="text" class="form-control" name="clave" required maxlength="9" value="{{ old('clave') }}">
                            @if ($errors->has('clave'))
                                <span class="error text-danger" for="input-clave">{{ $errors->first('clave')}}</span>
                            @endif
                        </div>


                        <div class="form-group">
                            <label for="nombre">nombre</label>
                            <input type="text" class="form-control" name="nombre" required maxlength="45" value="{{ old('nombre') }}">
                            @if ($errors->has('nombre'))
                                <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre')}}</span>
                            @endif
                        </div>
                        
                       

                        
        <!--Botones de Guardar y Cancelar -->
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <a href="{{ route('tiendas.index') }}" type="reset" class="btn btn-default"> Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>