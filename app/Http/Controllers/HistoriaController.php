<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Historia;
use App\Models\Noticia;
use Illuminate\Http\Request;

class HistoriaController extends Controller
{
    private $historia;
    public function __construct(Historia $historia)
    {
        $this->historia = $historia;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $historia = Historia::orderby('id', 'DESC')->get();
        return view('admin.pages.historia.index', compact('historia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat = Categoria::orderby('id', 'DESC')->get();
        return view('admin.pages.historia.create', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required'
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('upload/historia'), $imageName);
            $this->historia->img = $imageName;
            $this->historia->content = $request->content;
            $this->historia->save();
            return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Historia $historia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Historia $historia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Historia $historia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Historia $historia)
    {
        //
    }
}
