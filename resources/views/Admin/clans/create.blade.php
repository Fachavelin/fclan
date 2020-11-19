
@extends('Admin.layout')
@section('header')
 <h1>
        Clanes
        <small>Crear clan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Clan</li>
      </ol>


@stop
@section('content')
<div class="row">
  <div class= "box box-white">
        <div class= "box-header">
        <h3>Crear una publicacion</h3>
        </div>
        <div>
          <form method="POST" action="{{ route('admin.clans.store') }}">
          
            {{ csrf_field() }}
            {{-- <label>ID de Usuario</label><br> --}} 
            <input hidden name="id"  value="{{ Auth()->User()->id }}" readonly> </input><br>
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
                  <label>Titulo de la publicacion:</label><br>
                  <input type="text" name="titulo" class="form-control" rows="1"><br>
                  {!! $errors->first('titulo','<span class="help-block">:message</span>') !!}                 
                </div>
                <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                  <label>Descripcion:</label><br>
                  <textarea name="descripcion" class="form-control" ></textarea><br>
                  {!! $errors->first('descripcion','<span class="help-block">:message</span>') !!}
                </div> 
                <div class="form-group {{ $errors->has('requisitos') ? 'has-error' : ''}}">
                  <label>Requisitos:</label><br>
                  <textarea name="requisitos" class="form-control" rows="1" ></textarea></input><br>
                  {!! $errors->first('requisitos','<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('edadminima') ? 'has-error' : ''}}">
                  <label>Edad minima:</label><br>
                  <input type = "number" name="edadminima" class="form-control" ></input><br>
                  {!! $errors->first('edadminima','<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('edadmaxima') ? 'has-error' : ''}}">
                  <label>Edad máxima:</label><br>
                  <input type = "number" name="edadmaxima" class="form-control"></input><br>
                  {!! $errors->first('edadmaxima','<span class="help-block">:message</span>') !!}
                </div>
            
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Paises:</label>
                  <select name="pais[]" class="form-control select2" multiple="multiple" data-placeholder="Selecciona uno o mas paises" style="width: 100%;">
                    @foreach ($pais as $pai)
                        <option value="{{ $pai->id }}">{{ $pai->nombre }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                <label>Juegos:</label>
                  <select name="juego[]" class="form-control select2" multiple="multiple" data-placeholder="Selecciona uno o mas paises" style="width: 100%;">
                    @foreach ($juegos as $juego)
                        <option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
                    @endforeach
                  </select>
                </div>
                
                <div class="form-group {{ $errors->has('discord') ? 'has-error' : ''}}">
                  <label>Enlace Discord:</label><br>
                  <input type="text" name="discord" placeholder="Aqui ingresa en enlace invitacion a tu Discord" class="form-control"></input><br>
                  {!! $errors->first('discord','<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group">
                  <label>Enlace Whatsapp:</label><br>
                <input type="text" name="whatsapp" placeholder="Aqui ingresa en enlace invitacion a tu grupo the WhatsApp" class="form-control"></input><br>
                </div>
               
                
        
        
                
                
             
                {{--  
                <label>Fecha:</label><br>
                <input type = 'date'  name="published_at" placeholder="" ></input><br>--}}
        
                
                <button type = 'submit' class="btn btn-primary btn-block" value='PUT'>Continuar</button>
              </div>

            </form>
        </div>
        
  </div>
</div>

@stop
<link rel="stylesheet" href="/adminlte/plugins/select2/select2.min.css">

@push('scripts')
<script src="/adminlte/plugins/select2/select2.full.min.js"></script>}

<script>
 $('.select2').select2();
</script>
@endpush