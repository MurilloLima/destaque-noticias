 <!-- Navbar start -->
 <div class="container-fluid fixed-top">
     <div class="container topbar bg-primary d-none d-lg-block">
         <div class="d-flex justify-content-between">
             <div class="top-info ps-2">
                 <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="index.html#"
                         class="text-white">Avenida Beira Rio</a></small>
                 <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="index.html#"
                         class="text-white">contato@destaquenoticias.com</a></small>
             </div>
             <div class="top-link pe-2">
                 <a href="https://open.spotify.com/episode/3VqlVsoMGOoB9DY9ypu3K7?go=1&sp_cid=262691a5dfae3b8a54c19c4f40def70d&utm_source=embed_player_p&utm_medium=desktop&nd=1&dlsi=1b0870bdc2f6474b"
                     class="text-white"><small class="text-white mx-2">PODCAST</small></a>
             </div>
         </div>
     </div>
     <div class="container px-0">
         <nav class="navbar navbar-light bg-white navbar-expand-xl">
             <a href="/" class="navbar-brand">
                 <img src="{{ asset('home/img/logo.png') }}" style="width: 220px" alt="">
             </a>
             <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                 data-bs-target="#navbarCollapse">
                 <span class="fa fa-bars text-primary"></span>
             </button>
             <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                 <div class="navbar-nav mx-auto">
                     <a href="/" class="nav-item nav-link">Home</a>

                     @foreach ($cat as $item)
                         <a href="{{ route('home.pages.noticias.index', [$item->slug]) }}"
                             class="nav-item nav-link">{{ $item->name }}</a>
                     @endforeach

                     <a href="{{ route('home.pages.denuncia.index') }}" class="nav-item nav-link">Denuncie</a>
                     {{-- <a href="contact.html" class="nav-item nav-link">Notícias</a> --}}
                     {{-- <a href="{{ route('home.pages.contatos.index') }}" class="nav-item nav-link">Contatos</a> --}}
                 </div>
                 <div class="d-flex m-3 me-0">
                     {{-- <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                         data-bs-toggle="modal" data-bs-target="#searchModal"><i
                             class="fas fa-search text-primary"></i></button> --}}
                     {{-- <a href="index.html#" class="position-relative me-4 my-auto">
                        <i class="fa fa-shopping-bag fa-2x"></i>
                        <span
                            class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                            style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                    </a> --}}
                     <a href="{{ route('login') }}" class="my-auto">
                         <i class="fas fa-user fa-2x"></i>
                     </a>
                 </div>
             </div>
         </nav>
     </div>
 </div>
 <!-- Navbar End -->
