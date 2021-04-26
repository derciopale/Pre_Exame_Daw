@extends('guardas.layout')
 
@section('content')
    
<div class="box-body">
    <form action="/guardas/pesquisa" method="GET">
        <div class="form-group">

            <div class="col-sm-4">
                <input type="text" class="form-control" name="nome" value="{{'p_nome'}}" id="nome" placeholder="informe o nome">
            </div>
            <div class="col-sm-4">
                <button type="submit" class="btn btn-default">Pesquisar</button>                    
            </div>
        </div>
    </form>
</div>

    
    
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
            <td>
                <form action="{{ route('guardas.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('guardas.show',$value->id) }}">Exibir</a>    
                    <a class="btn btn-primary" href="{{ route('guardas.edit',$value->id) }}">Editar</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection