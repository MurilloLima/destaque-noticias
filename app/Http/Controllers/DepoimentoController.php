<?php

namespace App\Http\Controllers;

use App\Models\Depoimento;
use Illuminate\Http\Request;

class DepoimentoController extends Controller
{
    private $depoimento;
    public function __construct(Depoimento $depoimento)
    {
        $this->depoimento = $depoimento;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Depoimento::orderBy('id', 'DESC')->get();
        return view('admin.pages.depoimentos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.depoimentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'depoimento' => 'required',
        ]);

        $this->depoimento->name =  $request->name;
        $this->depoimento->depoimento = $request->depoimento;
        $this->depoimento->save();
        return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Depoimento $depoimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Depoimento $depoimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Depoimento $depoimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dep = Depoimento::destroy($id);
        return redirect()->back()->with('msg', 'Deletado com sucesso!');
    }
}
