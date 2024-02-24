<?php

namespace App\Http\Controllers;

use App\Models\Publicidade;
use Illuminate\Http\Request;

class PublicidadeController extends Controller
{
    private $publicidade;
    public function __construct(Publicidade $publicidade)
    {
        $this->publicidade = $publicidade;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Publicidade::orderby('id', 'DESC')->get();
        return view('admin.pages.publicidade.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.publicidade.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
        ]);

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('upload/publicidade'), $imageName);
            $this->publicidade->name = $request->name;
            $this->publicidade->img = $imageName;
            $this->publicidade->save();
            return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Publicidade $publicidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $publicidade = Publicidade::find($id);
        return view('admin.pages.publicidade.edit', compact('publicidade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publicidade $publicidade)
    {
        // upload de image
        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            # code...
            $image = $request->file('img');
            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $image->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";
            $publicidade = $this->publicidade->find($request->id);
            $image->move(public_path('upload/publicidade'), $nameFile);
            $publicidade->img = $nameFile;
            $publicidade->name = $request->get('name');
            $publicidade->update();
            return redirect()->back()->with('msg', 'Edição efetuada com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->publicidade->destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
