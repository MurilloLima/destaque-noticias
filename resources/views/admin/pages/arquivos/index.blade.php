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
                                @if ($errors->any())
                                    <div class="alert alert-danger text-center" style="margin: 10px;">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="text-align: center">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session('msg'))
                                    <div class="row text-center">
                                        <div class="col-md-12" \>
                                            <div class="alert alert-success text-center"
                                                style="color: white; margin: 10px;">
                                                {{ session('msg') }}
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="card card-danger">
                                    <div class="card-header">
                                        <h3 class="card-title">Arquivos digitais</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin.pages.arquivos.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            <div class="row">
                                                @csrf
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input type="text" class="form-control" name="title"
                                                                placeholder="Nome">
                                                        </div>
                                                        <div class="col-6">

                                                            <!-- <label for="customFile">Custom File</label> -->
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"
                                                                    name="file" id="customFile">
                                                                <label class="custom-file-label" for="customFile">
                                                                    Arquivo</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-sm-6">
                                                    <button type="submit" class="btn btn-info">Anexar</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="row" style="margin-top: 10px;">
                                            <div class="col-sm-12">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">#</th>
                                                            <th>Nome</th>
                                                            <th>Arquivo</th>
                                                            <th style="width: 40px">#</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $item)
                                                            <tr>
                                                                <td>{{ $item->id }}</td>
                                                                <td>{{ $item->title }}</td>
                                                                <td>
                                                                    <a
                                                                        href="{{ asset('upload/arquivo/' . $item->file) }}">{{ $item->file }}</a>
                                                                </td>
                                                                <td>
                                                                    <a
                                                                        href="{{ route('admin.pages.arquivos.destroy', [$item->id]) }}">Deletar</a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
