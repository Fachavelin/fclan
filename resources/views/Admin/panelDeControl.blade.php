@extends('Admin.layout')

@section('content')
<h1>Panel de Control </h1>
<h1>Usuario autenticado: {{ auth()->user()->name }}</h1>

@stop