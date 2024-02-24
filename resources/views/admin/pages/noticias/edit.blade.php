@extends('admin.layout.app')
@section('title', 'Noticias')

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
                        <h1>Notícia</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard', ['id' => 1]) }}">Home</a></li>
                            <li class="breadcrumb-item active">Notícias</li>
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
                            <form action="{{ route('admin.pages.noticias.update') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="id" value="{{ $noticia->id }}">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="customFile">Imagem</label>
                                            <div class="custom-file">
                                                <input type="file" name="img" required value="{{ $noticia->img }}"
                                                    class="custom-file-input" placeholder="410x285" id="customFile">
                                                <label class="custom-file-label" for="customFile">Imagem</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectRounded0">Categoria</label>
                                            <select class="custom-select rounded-0" name="cat_id">
                                                @foreach ($cat as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="customFile">Titulo</label>
                                            <div class="custom-file">
                                                <input type="text" name="title" value="{{ $noticia->title }}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="customFile">Descrição</label>
                                            <div class="custom-file">
                                                <input type="text" name="desc" required value="{{ $noticia->desc }}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="customFile">Conteúdo</label>
                                            <textarea name="content" id="myeditorinstance">
                                                {{ $noticia->content }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="submit" class="btn btn-primary">Atualizar</button>
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
