<?php

namespace App\Http\Controllers;
use App\Models\Recluso;

use Illuminate\Http\Request;

class ReclusoController extends Controller
{
    public function index()
    {
       

            $data = Recluso::latest()->paginate(5);
    
            return view('reclusos.index',compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('reclusos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  Recluso $reclusos)
    {
        
                        $request->validate([
                            'nome' => 'required',
                            'apelido' => 'required',
                            'tipo' =>'required',
                            'dataNascimento' => 'required',
                            'cadeia' => 'required'
                            
                        ]);
                    
                                        
                                   
                                       

                        Recluso::create($request->all());
                     
                        return redirect()->route('reclusos.index')
                                        ->with('success','Recluso cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Recluso $recluso)
    {
        return view('reclusos.show',compact('recluso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Recluso $recluso)
    {
        return view('reclusos.edit',compact('recluso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recluso $recluso)
    {
        $request->validate([
            'nome' => 'required',
            'apelido' => 'required',
            'tipo' => 'required',
            'dataNascimento' => 'required',
            'cadeia' => 'required'
        ]);
    
        $recluso->update($request->all());
    
        return redirect()->route('reclusos.index')
                        ->with('success','Recluso actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recluso $recluso)
    {
        $recluso->delete();
    
        return redirect()->route('reclusos.index')
                        ->with('success','Apagado');
}

}
