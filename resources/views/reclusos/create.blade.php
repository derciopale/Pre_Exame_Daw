@extends('reclusos.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar novo Recluso</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('reclusos.index') }}"> Voltar</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('reclusos.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Introduza o nome">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apelido:</strong>
                <input class="form-control" type="text" name="apelido" placeholder="Introduzao apelido"></inout>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Tipo:</strong>
		
			<select class="form-control" for="tipo" name="tipo" id="tipo">
			<option value="Homicidio">Homicidio</option>
			<option value="ViolenciaDomestica">Violencia Domestica</option>
			</select>
			</div>

           


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data Nascimento:</strong>
                <input type="date" class="form-control" name="dataNascimento" ></input>
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cadeia:</strong>
                <input type="text" class="form-control" name="cadeia" ></input>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
   
</form>
@endsection