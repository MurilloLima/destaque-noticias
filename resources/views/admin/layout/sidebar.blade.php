 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="/" class="brand-link">
         <img src="{{ asset('home/assets/images/logo200x200px.png') }}" alt=""
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">SINSEMEM</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('admin/dist/img/avatar4.png') }}" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">{{ auth()->user()->name }}</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         {{-- <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Buscar"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div> --}}

         <!-- Sidebar Menu -->
         @if (auth()->user()->role == 2)
             <nav class="mt-2">
                 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                     data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
                     <li class="nav-item menu-open">
                         <a href="#" class="nav-link bg-danger">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('dashboard') }}" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Ficha de inscrição</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                <a href="{{ route('admin.pages.arquivos.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Arquivos digitais</p>
                                </a>
                            </li>
                             <li class="nav-item">
                                 <a href="{{ route('admin.pages.mensagem.index') }}" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Mensagem</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                <a href="{{ route('admin.pages.carteira.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Carteira de sócio</p>
                                </a>
                            </li>
                            
                             <form action="{{ route('logout') }}" method="post">
                                 @csrf
                                 <li class="nav-item">
                                     <input type="submit" class="form-control btn btn-default" value="Sair">
                                 </li>
                             </form>

                         </ul>
                     </li>
                 </ul>
             </nav>
         @else
             <nav class="mt-2">
                 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                     data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                     <li class="nav-item menu-open">
                         <a href="#" class="nav-link bg-danger">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 SITE
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="{{ route('admn.pages.noticias.index') }}" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Notícias</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                <a href="{{ route('admin.pages.congresso.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Assembleia</p>
                                </a>
                            </li>
                             <li class="nav-item">
                                 <a href="{{ route('admin.pages.reunioes.index') }}" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Edital de Convocação</p>
                                 </a>
                             </li>
                             {{-- <li class="nav-item">
                                 <a href="" class="nav-link">
                                     <i class="far fa-circle nav-icon"></i>
                                     <p>Contatos</p>
                                 </a>
                             </li> --}}
                         </ul>
                     </li>

                     <li class="nav-header">SERVIDORES</li>
                     <li class="nav-item">
                        <a href="{{ route('admin.pages.servidores.create') }}" class="nav-link">
                            <i class="nav-icon far fa-circle"></i>
                            <p>
                                Cadastrar
                            </p>
                        </a>
                    </li>
                     <li class="nav-item">
                         <a href="{{ route('admin.pages.users.index') }}" class="nav-link">
                             <i class="nav-icon far fa-circle"></i>
                             <p>
                                 Listar todos
                                 <span class="badge badge-danger right">
                                     {{ App\Models\User::count() }}
                                 </span>
                             </p>
                         </a>
                     </li>
                     <br>
                     <br>
                     <form action="{{ route('logout') }}" method="post">
                         @csrf
                         <li class="nav-item">
                             <input type="submit" class="form-control btn btn-default" value="Sair">
                         </li>
                     </form>


                 </ul>
             </nav>
         @endif

         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
