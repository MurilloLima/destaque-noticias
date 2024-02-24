@extends('admin.layout.app')
@section('title', 'Depoimento')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (session('msg'))
                            <div class="alert alert-success text-center">
                                {{ session('msg') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Depoimento</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Depoimento</li>
                        </ol>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Cadastrar</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- /.card-body -->
                            <form action="{{ route('admin.pages.depoimento.store') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="customFile">Nome</label>
                                            <div class="custom-file">
                                                <input type="text" name="name" required class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="customFile">Depoimento</label>
                                            <textarea name="depoimento" style="height: 300px !important;" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                    </div>

                                </div>
                            </form>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->

                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
