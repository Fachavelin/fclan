@extends('Admin.layout')

@section('header')

 <h1>
        Clanes Creados
     
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Clan</li>
      </ol>

@stop
@section('content')
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Publicaciones de Clanes Creadas</h3>
              
            </div>
            <div class="form-gruop">
              <a href="{{ route('admin.clans.create') }}" class="btn btn-primary float-right">Crear Clan</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="clans-table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Extracto</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clans as $clan )
                      <tr>
                        <td>{{ $clan->id }}</td>
                        <td>{{ $clan->titulo }}</td>
                        <td>{{ $clan->descripcion }}</td>
                        <td>
                        <a href ="{{ route('clans.show', $clan) }}" class='btn btn-xs btn-success' target="_blank"><i class="fa fa-eye"></i></a>
                        <a href ="{{ route('admin.clans.edit', $clan) }}" class='btn btn-xs btn-info'><i class="fa fa-pencil"></i></a>
                        <form method="POST" action="{{ route('admin.clans.destroy',$clan) }}" style="display: inline">
                        {{ csrf_field() }}{{ method_field('DELETE') }}
                            <button class='btn btn-xs btn-danger'
                            onclick="return confirm('Estas seguro de querer eliminar este clan?')">
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