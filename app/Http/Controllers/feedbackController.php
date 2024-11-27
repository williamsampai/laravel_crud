<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateSupport;
use App\Models\Feedback;
use Illuminate\Http\Request;
class FeedbackController extends Controller
{
    public readonly feedbackController $feedback;

    public function __construct()
    {
        $this->feedback = new feedbackController();
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSupport $request)
    {
      
            $validatedData = $request->validate([
                'nome' => 'required|string|max:255',
                'senha' => 'required|string|max:15',
                'email' => 'required|email|max:255',
                'retorno' => 'required|string|max:500',
            ]);  
            FeedbackController::create($validatedData);
            return redirect()->back()->with('success', 'Comentário enviado com sucesso!');
            if ($created) {
                $feedback = Feedback::all(); 
                
                return view('feedback', ['feedback' => $feedback]);
            }
            
            return redirect()->back()->with('message', 'Erro ao criar!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
