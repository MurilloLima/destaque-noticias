@extends('admin.layout.app')
@section('title', 'Criar Reunião')
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
                {{-- <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">
                                <a href="{{ route('admin.pages.noticias.create') }}">
                                    Cadastrar
                                </a>
                            </li>
                        </ol>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Reunião</h3>
                            </div>

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

                                </div>
                            </div>

                            <form action="{{ route('admin.pages.reunioes.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <label for="">Assunto</label>
                                    <input type="text" name="assunto" class="form-control">
                                    <label for="">Local</label>
                                    <input type="text" name="local" class="form-control">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="">Data</label>
                                            <input type="date" name="data" class="form-control  ">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="">Horario</label>
                                            <input type="time" name="horario" class="form-control  ">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-default">Cadastrar</button>
                                </div>
                            </form>
                        </div>



                    </div>


                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
