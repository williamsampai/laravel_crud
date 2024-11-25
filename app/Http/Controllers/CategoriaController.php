<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;


class CategoriaController extends Controller
{
    public readonly Categoria $categoria;

    public function __construct()
    {
        $this->categoria = new Categoria();
    }


    public function index()
    {
        $categoria = Categoria::all();
        return view('categoria',['categoria'=> $categoria]);
    }

    
     
    public function create()
    {
        return view('criar/medico_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->categoria->create([
            'nome' => $request->input('nome')
        ]);
    
       
        if ($created) {
            $categoria = Categoria::all(); 
            
            return view('categoria', ['categoria' => $categoria]);
        }
        
        return redirect()->back()->with('message', 'Erro ao criar!');
    }

 
    public function show(Categoria $categoria)
    {
        return view('deletar/medico_delete', ['categoria' => $categoria]);
    }

    public function edit(Categoria $categoria)
    {
       return view('editar/medico_edit', ['categoria' => $categoria]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->categoria->where('id', $id)->update($request->except(['_token', '_method']));
        
        if($updated) {
            $categoria = Categoria::all(); 
            return view('categoria', ['categoria' => $categoria]);
        }
        return redirect()->back()->with('message', 'Erro ao atualizar!');
    }

   
    public function destroy(string $id)
    {
        $this->categoria->where('id', $id)->delete();

        return redirect()->route('medicos.index');
    }
}