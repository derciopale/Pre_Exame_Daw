@extends('celas.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Adicionar nova Cela</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('celas.index') }}"> Mostrar</a>
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
   
<form action="{{ route('celas.store') }}" method="POST">
    @csrf
    
       
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cela:</strong>
                <input type="text" name="cela" class="form-control" placeholder="Introduza a cela">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Recluso:</strong>
                <input class="form-control" type="text" name="recluso" placeholder="Introduza o recluso"></input>
            </div>
        </div>

        <!-- @foreach ($cela as $key => $value)
        <strong>Recluso:</strong>
		
			<select class="form-control" for="nome" name="nome" id="nome">
			<option value="$value->Guarda['nome']"></option>
          
			</select>
			</div>

        @endforeach -->

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Guarda:</strong>
                <input class="form-control" type="text" name="guarda" placeholder="Introduza o guarda"></input>
            </div>
        </div>


       
    
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </div>
   
</form>
@endsection