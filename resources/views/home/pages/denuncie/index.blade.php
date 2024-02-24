@extends('home.layout.app')
@section('title', 'Denuncie')

@section('content')
    <!-- Section Start-->
    <div class="container-fluid banner bg-secondary my-5" style="background-color: #FFFFFF !important;">
        <div class="container py-5">

            <!-- <h2>Notícias</h2> -->
            <div class="row g-4 align-items-center" style="margin-top: 100px">
                <div class="row">
                    <div class="col-12">
                        @if (session('msg'))
                            <div class="alert alert-success text-center">
                                {{ session('msg') }}
                            </div>
                        @endif
                    </div>
                </div>
                <h2>Web Denúncia</h2>
                <p>A partir de agora você entrou num ambiente seguro, com certificação digital, para que
                    possa fazer suas denúncias com total tranquilidade.</p>
                <form action="{{ route('home.pages.denuncia.store') }}" method="post">
                    @csrf
                    <label for="">Assunto</label>
                    <input type="text" name="assunto" class="form-control">
                    <label for="">Denuncia</label>
                    <textarea name="denuncia" class="form-control" cols="30" rows="10"></textarea>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Section End -->
@endsection
