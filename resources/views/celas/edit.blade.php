@extends('celas.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Celas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('celas.index') }}"> Voltar</a>
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
  
    <form action="{{ route('celas.update', $cela->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cela:</strong>
                    <input type="text" name="cela" value="{{ $cela->cela }}" class="form-control" placeholder="cela">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Recluso:</strong>
                    <input type="text" class="form-control" name="recluso"  value="{{ $cela->recluso }}"></input>
                </div>
            </div>

            
         
    
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Guarda:</strong>
                    <input type="text" name="guarda" value="{{ $cela->guarda}}" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>
   
    </form>
@endsection