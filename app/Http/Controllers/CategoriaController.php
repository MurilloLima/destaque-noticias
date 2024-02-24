<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriaController extends Controller
{
    private $categoria;
    public function __construct(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = Categoria::orderby('id', 'DESC')->get();
        return view('admin.pages.categoria.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $this->categoria->name = $request->name;
        $this->categoria->slug = Str::slug($request->name, '-');
        $this->categoria->save();
        return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cat = Categoria::find($id);
        return view('admin.pages.categoria.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $noticia = $this->categoria->find($request->id);
        $noticia->name = $request->get('name');
        $noticia->update();
        return redirect('/admin/categorias')->with('msg', 'Edição efetuada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->categoria->destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
