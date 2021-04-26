<?php

namespace App\Http\Controllers;
use App\Models\Guarda;

use Illuminate\Http\Request;

class GuardaController extends Controller
{
    

    public function index()
    {
       

            $data = Guarda::latest()->paginate(5);
    
            return view('guardas.index',compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('guardas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
                        $request->validate([
                            'nome' => 'required',
                            'apelido' => 'required',
                            'dataNascimento' => 'required',
                            'cadeia' => 'required'
                            
                        ]);
                    
                                        
                                   
                                       

                        Guarda::create($request->all());
                     
                        return redirect()->route('guardas.create')
                                        ->with('success','Guarda cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Guarda $guarda)
    {
        return view('guardas.show',compact('guarda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Guarda $guarda)
    {
        return view('guardas.edit',compact('guarda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guarda $guarda)
    {
        $request->validate([
            'nome' => 'required',
            'apelido' => 'required',
            'dataNascimento' => 'required',
            'cadeia' => 'required'
        ]);
    
        $guarda->update($request->all());
    
        return redirect()->route('guardas.index')
                        ->with('success','Guarda actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guarda $guarda)
    {
        $guarda->delete();
    
        return redirect()->route('guardas.index')
                        ->with('success','Apagado');
}


public function pesquisa(Request $request)
{
    $p_nome = $request->query('p_nome');

    $data = Guarda::table('guardas')
        ->where('nome', 'like',  "%" .$p_nome)
        ->get();
    return view('guardas.index')->with('guardas', $p_nome);
}

}
