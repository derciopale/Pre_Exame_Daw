@extends('celas.layout')
 
@section('content')
        
    
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">


            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('celas.create') }}"> Nova Cela</a>
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
            <th>Cela</th>
            <th>Recluso</th>
            <th>Guarda</th>
          
            

            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->cela }}</td>
            <td>{{ $value->recluso }}</td>
            <td>{{ $value->guarda }}</td>
           
            <td>
                <form action="{{ route('celas.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('celas.show',$value->id) }}">Exibir</a>    
                    <a class="btn btn-primary" href="{{ route('celas.edit',$value->id) }}">Editar</a>   
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