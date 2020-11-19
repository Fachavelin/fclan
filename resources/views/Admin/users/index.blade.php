@extends('Admin.layout')

@section('header')

 <h1>
        Usuarios Creados
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Usuario</li>
      </ol>

@stop
@section('content')
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Usuarios</h3>
              <a href="{{ route('admin.users.create') }}" class="btn btn-primary float-right">Crear Usuario</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="users-table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user )
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        @if ($user->hasRole('Admin'))
                        <td>{{ $user->getRoleNames()->implode(', ')}}</td>
                        @else
                        <td>Ninguno</td>
                        @endif
                        <td>
                         <a href ="{{ route('admin.users.show', $user) }}" class='btn btn-xs btn-success' target="_blank"><i class="fa fa-eye"></i></a>
                        <a href ="{{ route('admin.users.edit', $user) }}" class='btn btn-xs btn-info'><i class="fa fa-pencil"></i></a>
                        <form method="POST" action="{{ route('admin.users.destroy',$user) }}" style="display: inline">
                        {{ csrf_field() }}{{ method_field('DELETE') }}
                            <button class='btn btn-xs btn-danger'
                            onclick="return confirm('Estas seguro de querer eliminar este usuario')">
                            <i class="fa fa-times"></i></button>
                        </form>
                        </td>
                      </tr>
                      
                    @endforeach
                </tbody>
                <tfoot>

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@stop