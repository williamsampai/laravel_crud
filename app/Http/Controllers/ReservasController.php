<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateSupport;

use Illuminate\Http\Request;

use App\Models\Reservas;


class ReservasController extends Controller
{
  

    public readonly Reservas $reservas;
    public function __construct(){
       $this->reservas = new Reservas(); 
    }

    public function index()
    {
        $reservas= Reservas::all();
        return view('dashboard', compact('reservas'));
    }

    public function create()
    {
        return view('reservas.create');
    }


    public function store(StoreUpdateSupport $request)
    {
    $created = $this ->reservas->create([
        'nome' => $request->input('nome'),
        'numero_mesa' => $request->input('numero_mesa'),
        'cadeiras' => $request->input('cadeiras'),
        'data' => $request->input('data'),
        'hora' => $request->input('hora'),
    ]);
    return redirect()->back()->with('success', 'Reserva feita com sucesso!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $reservas= Reservas::findOrFail($id);
        $reservas->delete();

        return redirect()->route('dashboard')->with('success', 'Reserva excluída com sucesso!');
    }
}
