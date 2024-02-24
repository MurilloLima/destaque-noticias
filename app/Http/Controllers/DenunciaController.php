<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Dencia;
use App\Models\Denuncia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DenunciaController extends Controller
{
    private $denuncia;
    public function __construct(Denuncia $denuncia)
    {
        $this->denuncia = $denuncia;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menu
        $cat = Categoria::orderBy('created_at', 'desc')->get();
        return view('home.pages.denuncie.index', compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pagamento()
    {
        $cat = Categoria::orderBy('created_at', 'desc')->get();
        return view('home.pages.pagamento.index', compact('cat'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'assunto' => 'required',
            'denuncia' => 'required',
        ]);
        $this->denuncia->assunto = $request->assunto;
        $this->denuncia->denuncia = $request->denuncia;
        $this->denuncia->save();
        return redirect()->back()->with('msg', 'Denuncia enviada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Denuncia $denuncia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Denuncia $denuncia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Denuncia $denuncia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Denuncia $denuncia)
    {
        //
    }
}
