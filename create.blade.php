<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Crear Usuarios</title>
</head>
<body>
    <br>
    <div class="container">
        <h4>Nuevo Usuario</h4>

        <div class="row">
            <div class="col-xl-12">
        <!--Formulario de usuarios-->        
                <form action="{{ route('usuarios.index') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="clave">Matricula</label>
                            <input type="text" class="form-control" name="clave" required maxlength="9" value="{{ old('clave') }}">
                            @if ($errors->has('clave'))
                                <span class="error text-danger" for="input-clave">{{ $errors->first('clave')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required maxlength="45" value="{{ old('nombre') }}">
                            @if ($errors->has('nombre'))
                                <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="apellido_p">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellido_p" required maxlength="45" value="{{ old('apellido_p') }}">
                            @if ($errors->has('apellido_p'))
                                <span class="error text-danger" for="input-apellido_p">{{ $errors->first('apellido_p')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="apellido_m">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellido_m" required maxlength="45" value="{{ old('apellido_m') }}">
                            @if ($errors->has('apellido_m'))
                                <span class="error text-danger" for="input-apellido_m">{{ $errors->first('apellido_m')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento"value="{{ old('fecha_nacimiento') }}">
                            @if ($errors->has('fecha_nacimiento'))
                                <span class="error text-danger" for="input-fecha_nacimiento">{{ $errors->first('fecha_nacimiento')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="genero">Genero</label>
                            <input type="text" class="form-control" name="genero" required maxlength="15" value="{{ old('genero') }}">
                            @if ($errors->has('genero'))
                                <span class="error text-danger" for="input-genero">{{ $errors->first('genero')}}</span>
                            @endif
                        </div>

                        

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input accept="image/*" type="file" class="form-control" name="foto" value="{{ old('foto') }}">
                            @if ($errors->has('foto'))
                                <span class="error text-danger" for="input-foto">{{ $errors->first('foto')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" required maxlength="45" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="error text-danger" for="input-email">{{ $errors->first('email')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" name="pass" required maxlength="8" value="{{ old('pass') }}">
                            @if ($errors->has('pass'))
                                <span class="error text-danger" for="input-pass">{{ $errors->first('pass')}}</span>
                            @endif
                        </div>
                    
        <!--Botones de Guardar y Cancelar -->
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <a href="{{ route('usuarios.index') }}" type="reset" class="btn btn-default"> Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>