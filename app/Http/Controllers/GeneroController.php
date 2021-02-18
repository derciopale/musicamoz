<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function index()
    {
        $generos = Genero::latest()->paginate(5);
  
        return view('generos.index',compact('generos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generos.create');
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
            'genero' => 'required',
            'subgenero' => 'required',
        ]);
  
        Genero::create($request->all());
   
        return redirect()->route('generos.index')
                        ->with('success','Genero criado com Sucesso!.');
    }
   
    
    public function show(Genero $genero)
    {
        return view('generos.show',compact('genero'));
    }
   
    
    public function edit(Genero $genero)
    {
        return view('generos.edit',compact('genero'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genero $genero)
    {
        $request->validate([
            'genero' => 'required',
            'subgenero' => 'required',
        ]);
  
        $genero->update($request->all());
  
        return redirect()->route('generos.index')
                        ->with('success','Genero updated successfully');
    }
  
    
    public function destroy(Genero $genero)
    {
        $genero->delete();
  
        return redirect()->route('generos.index')
                        ->with('success','Genero deleted successfully');
    }

    
}
