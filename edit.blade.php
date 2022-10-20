<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Editar Usuarios</title>
</head>
<body>
    <br>
    <div class="container">
        <h4>Usuario</h4>

        <div class="row">
            <div class="col-xl-12">
        <!--Formulario de usuarios-->        
                <form action="{{ route('usuarios.update', $usuario->id_usuario) }}" method="POST">
                    @csrf
                    @method ('PUT')

                        <div class="form-group">
                            <label for="clave">Matricula</label>
                            <input type="text" class="form-control" name="clave" maxlength="9" value="{{ $usuario->clave }}">
                            @if ($errors->has('clave'))
                                <span class="error text-danger" for="input-clave">{{ $errors->first('clave')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" maxlength="45" value="{{ $usuario->nombre }}">
                            @if ($errors->has('nombre'))
                                <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="apellido_p">Apellido Parterno</label>
                            <input type="text" class="form-control" name="apellido_p" maxlength="45" value="{{ $usuario->apellido_p }}">
                            @if ($errors->has('apellido_p'))
                                <span class="error text-danger" for="input-apellido_p">{{ $errors->first('apellido_p')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="apellido_m">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellido_m" maxlength="45" value="{{ $usuario->apellido_m }}">
                            @if ($errors->has('apellido_m'))
                                <span class="error text-danger" for="input-apellido_m">{{ $errors->first('apellido_m')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                            <input type="text" class="form-control" name="fecha_nacimiento" maxlength="9" value="{{ $usuario->fecha_nacimiento }}">
                            @if ($errors->has('fecha_nacimiento'))
                                <span class="error text-danger" for="input-fecha_nacimiento">{{ $errors->first('fecha_nacimiento')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="genero">Genero</label>
                            <input type="text" class="form-control" name="genero" maxlength="9" value="{{ $usuario->genero }}">
                            @if ($errors->has('genero'))
                                <span class="error text-danger" for="input-genero">{{ $errors->first('genero')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="foto_n">Nombre de la foto</label>
                            <input type="text" class="form-control" name="foto" maxlength="9" value="{{ $usuario->foto }}">
                            @if ($errors->has('foto_n'))
                                <span class="error text-danger" for="input-foto">{{ $errors->first('foto_n')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <br>
                            <label for="imagen">===========>{{ $usuario->foto }}</label>
                            <input type="file" class="form-control" name="foto" maxlength="9" value="{{ $usuario->foto }}">
                            @if ($errors->has('foto'))
                                <span class="error text-danger" for="input-foto">{{ $errors->first('foto')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" maxlength="9" value="{{ $usuario->email }}">
                            @if ($errors->has('email'))
                                <span class="error text-danger" for="input-email">{{ $errors->first('email')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" name="pass" maxlength="9" value="{{ $usuario->pass }}">
                            @if ($errors->has('pass'))
                                <span class="error text-danger" for="input-pass">{{ $errors->first('pass')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="nivel">Nivel</label>
                            <input type="text" class="form-control" name="nivel" maxlength="9" value="{{ $usuario->nivel }}">
                            @if ($errors->has('nivel'))
                                <span class="error text-danger" for="input-nivel">{{ $errors->first('nivel')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="activo">Activo</label>
                            <input type="text" class="form-control" name="activo" maxlength="9" value="{{ $usuario->activo }}">
                            @if ($errors->has('activo'))
                                <span class="error text-danger" for="input-activo">{{ $errors->first('activo')}}</span>
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