@extends('guardas.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('guardas.create') }}"> Novo Guarda</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Data Nascimento</th>
            <th>Cadeia</th>
            

            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->nome }}</td>
            <td>{{ $value->apelido }}</td>
            <td>{{ $value->dataNascimento }}</td>
            <td>{{ $value->cadeia}}</td>
           
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection