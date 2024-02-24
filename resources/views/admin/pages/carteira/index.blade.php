@extends('admin.layout.app')
@section('title', 'Arquivos digitais')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h1 class="m-0">Meus dados</h1> --}}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                            {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                @if (auth()->user()->role == 2)
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-danger">
                                    <div class="card-header">
                                        <h3 class="card-title">Carteira de sócio</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" style="margin-top: 10px;">
                                            <div class="col-sm-12 text-center">
                                                <div class="carteira">
                                                    <div class="logocarteira">
                                                        <img src="{{ asset('home/assets/images/logo200x200px.png') }}"
                                                            alt="" width="100px">
                                                    </div>
                                                    <div class="text-header">
                                                        <p>SINDICATO DOS SERVIDORES DA EDUCAÇÃO <br>
                                                            DO MUNICIPIO ESTREITO-MA <br>
                                                            CNPJ: 06.100.310/0001-64
                                                        </p>
                                                    </div>
                                                    <div class="bolder"></div>
                                                    <div class="foto-user">
                                                        <img src="{{ asset('home/assets/images/perfil.png') }}"
                                                            alt="">
                                                        <a href="" data-toggle="modal"
                                                        data-target="#modal-sm">Alterar</a>
                                                        
                                                    </div>
                                                    <p class="nomeuser">NOME: {{ auth()->user()->name }}</p>
                                                    <p class="nomeuser">CARGO: {{ auth()->user()->cargo }} </p>
                                                    <p class="nomeuser">MATRÍCULA: {{ auth()->user()->matricula }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ count($noticias) }}</h3>
                                    <p>NOTÍCIAS</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="{{ route('admn.pages.noticias.index') }}" class="small-box-footer">+info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53</h3>
                                    <p>Congresssos</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">+info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{ count($users) }}</h3>
                                    <p>SERVIDORES</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="{{ route('admin.pages.users.index') }}" class="small-box-footer">+info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ count($reunioes) }}</h3>

                                    <p>REUNIÕES</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="{{ route('admin.pages.reunioes.index') }}" class="small-box-footer">+info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                @endif


            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
