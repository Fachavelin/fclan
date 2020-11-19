@extends('Admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-white">
                <div class="box-header">
                    <h3>Datos de Usuario</h3><br>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{ route('admin.users.store') }}">
                        {{ csrf_field() }}
                        <div id="crearUser">
                            <div class="form-check">
                                <input id="admin" class="form-check-input" type="checkbox" name="admin" value="true">
                                <label class="form-check-label">Admin</label>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label><br>             
                                <input type="text" class="form-control" name="name" value=""  v-model="name" required="required"> 

                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label><br>
                                <input type="email" class="form-control" name="email" value="" required>
                            </div>
                            <div class="form-group">
                              <label for="">Contreseña</label>
                              <input type="password" class="form-control" name="password" id="" placeholder="" required>
                            </div>
                            <div class="form-group">
                              <label for="">Confirmar Contraseña:</label>
                              <input type="password" class="form-control" name="password_confirmation" id="" placeholder="" required>
                            </div> 
                            
                            <button class="btn btn-primary btn-block">Crear Usuario</button>
                        </div>                      
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

<script src="{{ mix('js/app.js') }}"> </script>
@endpush