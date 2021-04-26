@extends('guardas.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Artista</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('reclusos.index') }}"> Voltar</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> verifique os campos<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('reclusos.update', $recluso->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" value="{{ $recluso->nome }}" class="form-control" placeholder="nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apelido:</strong>
                    <input type="text" class="form-control" name="apelido"  value="{{ $recluso->apelido }}"></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Tipo:</strong>
		
			<select class="form-control" for="tipo" name="tipo" id="tipo">
			<option value="{{ $recluso->tipo }}"> </option>
            <option value="Homicidio">Homicidio</option>
			<option value="ViolenciaDomestica">Violencia Domestica</option>
			
			</select>
			</div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data Nascimento:</strong>
                    <input  type="text" class="form-control" name="dataNascimento" value="{{ $recluso->dataNascimento }}"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cadeia:</strong>
                    <input type="text" name="cadeia" value="{{ $recluso->cadeia}}" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>
   
    </form>
@endsection