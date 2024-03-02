@extends('home.layout.app')
@section('title', 'Notícias')

<meta property="og:audio" content="{{ asset('upload/noticias/') . $data->img }}" />
<meta property="og:description" content="{{ asset('upload/noticias/') . $data->desc }}" />
<meta property="og:determiner" content="the" />
<meta property="og:locale" content="en_GB" />
<meta property="og:locale:alternate" content="fr_FR" />
<meta property="og:locale:alternate" content="es_ES" />
<meta property="og:site_name" content="IMDb" />
<meta property="og:video" content="{{ asset('upload/noticias/') . $data->img }}" />
<meta property="og:site_name" content="Destaque notícias">
<meta property="og:title" content="{{ $data->title }}">
<meta property="og:description" content="{{ $data->desc }}">
<meta property="og:image" itemprop="image" content="{{ asset('upload/noticias/' . $data->img) }}">
<meta property="og:type" content="website">

@section('content')
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">{{ $data->name }}</h1>
        <ol class="breadcrumb justify-content-center mb-0" id="personalizado">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="">Notícias</a></li>
            <li class="breadcrumb-item active text-white"></li>
        </ol>
    </div>
    <!-- Single Page Header End -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <span>Ouvi podcast</span><br>
                <a href="https://open.spotify.com/episode/3VqlVsoMGOoB9DY9ypu3K7?go=1&sp_cid=262691a5dfae3b8a54c19c4f40def70d&utm_source=embed_player_p&utm_medium=desktop&nd=1&dlsi=1b0870bdc2f6474b"
                    target="_blank">
                    <img src="{{ asset('home/img/apotify.png') }}" alt="" style="width: 130px">
                </a>
            </div>
        </div>
    </div>

    <!-- Single Product Start -->
    <div class="container-fluid py-3">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-8 col-xl-9">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <h4 class="fw-bold mb-3">{{ $data->title }}</h4>
                            <p class="mb-3">{{ $data->desc }}</p>

                            <div class="d-flex mb-4">
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star"></i>
                            </div>

                            <div class="border rounded">
                                <a href="{{ route('home.pages.view', [$data->slug]) }}">
                                    <img src="{{ asset('upload/noticias/' . $data->img) }}">
                                </a>
                            </div>

                            {{-- <h5 class="fw-bold mb-3">3,35 $</h5> --}}
                        </div>

                        <div class="col-lg-12">
                            <p class="mb-4">{!! $data->content !!}</p>
                        </div>
                        <div class="col-lg-12">
                            <p>Compartilhar</p>
                            <a href="https://api.whatsapp.com/send?text=www.destaquenoticias.com/view/{{ $data->slug }}">
                                <img src="{{ asset('home/img/whatsapp.png') }}" class="whatsapp" alt="">
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="row g-4 fruite">
                        <div class="col-lg-12">
                            <div class="input-group w-100 mx-auto d-flex mb-4">
                                <input type="text" class="form-control p-3" placeholder="Pesquisar"
                                    aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <h4 class="mb-4">+Notícias</h4>
                            {{-- noticias lado direto --}}
                            @foreach ($aletoria as $item)
                                <div class="d-flex align-items-center justify-content-start">
                                    {{-- <div class="rounded" style="width: 100px; height: 100px;">
                                        <a href="{{ route('home.pages.view', [$item->slug]) }}">
                                            <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                class="img-fluid rounded" alt="Image" style="padding: 3px">
                                        </a>
                                    </div> --}}
                                    <div>
                                        <a href="{{ route('home.pages.view', [$item->slug]) }}">
                                            <h5 class="fw-bold me-2">{{ $item->title }}</h5>
                                        </a>


                                        <div class="d-flex mb-2">
                                            {{-- <h6 class="mb-2">{{ $item->title }}</h6> --}}
                                            {{-- <h5 class="text-danger text-decoration-line-through">{{ $item->desc }}</h5> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="d-flex justify-content-center my-4">
                                <a href="shop-detail.html#"
                                    class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">
                                    Todas
                                </a>
                            </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product End -->

@endsection
