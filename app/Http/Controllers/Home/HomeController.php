<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Models\Categoria;
use App\Models\Depoimento;
use App\Models\Historia;
use App\Models\Newsletter;
use App\Models\Noticia;
use App\Models\Publicidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Forecast\Forecast;

class HomeController extends Controller
{
    private $email;
    public function __construct(Newsletter $email)
    {
        $this->email = $email;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menu categorias
        $cat = Categoria::orderBy('created_at', 'desc')->get();
        // news top

        //noticia principal
        $principal = Noticia::orderby('id', 'DESC')->limit(3)->get();

        //noticia RODAPE
        $noticiasrodape = Noticia::orderby('id', 'DESC')->offset(3)->limit(8)->get();

        $noticiasrecente = Noticia::orderBy('created_at', 'desc')->limit(3)->get();
        $galeria = Noticia::orderby('id', 'DESC')->offset(0)->limit(6)->get();
        $historia = Historia::orderby('id', 'DESC')->first();
        $maisnews = Noticia::orderby('id', 'DESC')->limit(6)->get();
        $noticiast8 = Noticia::orderby('id', 'DESC')->limit(6)->get();
        $outras = Noticia::offset(5)->limit(2)->get();
        $publicidade = Publicidade::all();
        $depoimento = Depoimento::orderBy('id', 'DESC')->get();
        return view('home.pages.index', compact('cat', 'principal', 'noticiasrecente', 'noticiasrodape', 'historia', 'maisnews', 'noticiast8', 'outras', 'publicidade', 'depoimento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function newsletter(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);
        $this->email->email = $request->email;
        $this->email->save();
        return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
    }


    /**
     * Display the specified resource.
     */
    public function view($slug)
    {
        $data = Noticia::where('slug', '=', $slug)->first();
        $cat = Categoria::orderBy('created_at', 'desc')->get();
        $aletoria = Noticia::orderby('id', 'DESC')->limit(5)->get();
        $outras = Noticia::offset(5)->limit(2)->get();
        return view('home.pages.noticias.view', compact('data', 'cat', 'outras', 'aletoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function noticias($slug)
    {
        $cat = Categoria::orderBy('created_at', 'desc')->get();
        $outras = Noticia::offset(5)->limit(2)->get();

        $slug =  Categoria::where('slug', '=', $slug)->first();
        $noticias = Noticia::where('cat_id', '=', $slug->id)->orderBy('id', 'DESC')->get();
        // dd($noticias);
        return view('home.pages.noticias.index', compact('noticias', 'cat', 'outras', 'slug'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function qrcode()
    {
        $cat = Categoria::orderBy('created_at', 'desc')->get();
        return view('home.pages.pagamento.qrcode', compact('cat'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
