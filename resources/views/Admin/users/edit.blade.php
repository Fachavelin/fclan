@extends('Admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-white">
                <div class="box-header">
                    <h3>Datos de Usuario</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('admin.users.update',$user) }}">
                        {{ csrf_field() }}
                         {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="nombre">Nombre</label><br>                        
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">                       
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label><br>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                          <label for="">Contraseña</label>
                          <input type="password" class="form-control" name="password" id="" placeholder="">
                        </div>
                        <div class="form-group">
                          <label for="">Confirmar Contraseña:</label>
                          <input type="password" class="form-control" name="password_confirmation" id="" placeholder="">
                        </div> 
                        
                        <button  class="btn btn-primary btn-block">Actualizar datos</button>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-white">
                <div class="box-header">
                    <h3>Publicaciones</h3>
                </div>
                <div class="box-body">
                    @forelse ($user->clans as $clan)
                    <a href="{{ route('clans.show',$clan )}}" target="_blank">
                        <strong>{{ $clan->titulo }}</strong>
                        <small class="text-muted">Publicado el {{ $clan->created_at->format('d/m/Y') }}</small><br>
                    </a>
                    @empty 
                    <small class="text-muted">No tiene ninguna publicacion</small>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection