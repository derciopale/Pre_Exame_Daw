<?php

namespace App\Http\Controllers;
use App\Models\Cela;
use Illuminate\Http\Request;

class CelaController extends Controller
{
    public function index()
    {
       

            $data = Cela::latest()->paginate(5);
    
            return view('celas.index',compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Cela $cela)
    {
        
        // return view('celas.create');
        return view('celas.create',compact('cela'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cela $cela)
    {
        
                        $request->validate([
                            'cela' => 'required',
                            'recluso' => 'required',
                            'guarda' => 'required'
                           
                            
                        ]);
                    
                                        
                                   
                        // $cela = Cela::get();   

                        Cela::create($request->all());
                     
                        return redirect()->route('celas.create')
                                        ->with('success','Cela cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Cela $cela)
    {
        return view('celas.show',compact('cela'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Cela $cela)
    {
        return view('celas.edit',compact('cela'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cela $cela)
    {
        $request->validate([
            'cela' => 'required',
            'recluso' => 'required',
            'guarda' => 'required'
           
            
        ]);
        $cela->update($request->all());
    
        return redirect()->route('celas.index')
                        ->with('success','Guarda actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cela $cela)
    {
        $cela->delete();
    
        return redirect()->route('celas.index')
                        ->with('success','Apagado');
}



}
