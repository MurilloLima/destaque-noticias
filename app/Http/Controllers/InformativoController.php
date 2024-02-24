<?php

namespace App\Http\Controllers;

use App\Models\Informativo;
use Illuminate\Http\Request;

class InformativoController extends Controller
{
    private $info;
    public function __construct(Informativo $info)
    {
        $this->info = $info;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = Informativo::orderBy('created_at', 'desc')->first();
        return view('admin.pages.info.index', compact('info'));
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
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Informativo $informativo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Informativo $informativo)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Informativo $informativo)
    {
        $request->validate([
            'info' => 'required',
        ]);
        $this->info->info = $request->info;
        $this->info->save();
        return redirect()->back()->with('msg', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Informativo $informativo)
    {
        //
    }
}
