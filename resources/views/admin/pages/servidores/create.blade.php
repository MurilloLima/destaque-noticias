@extends('admin.layout.app')
@section('title', 'Cadastrar')
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
                                <h3 class="card-title">Cadastrar</h3>
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

                            <form action="{{ route('admin.pages.servidores.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">Nome</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Matrícula</label>
                                            <input type="text" name="matricula" class="form-control">
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <label for="">Estado civíl</label>
                                            <select name="estado_civil" class="form-control">
                                                <option value=""></option>
                                                <option value="Solteiro">Solteiro</option>
                                                <option value="Casado">Casado</option>
                                                <option value="Separado">Separado</option>
                                                <option value="Divorciado">Divorciado</option>
                                                <option value="Viúvo">Viúvo</option>
                                                <option value="Amasiado">Amasiado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="">Endereco</label>
                                            <input type="text" name="endereco" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">CEP</label>
                                            <input type="text" name="cep" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Cidade</label>
                                            <input type="text" name="cidade" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">UF</label>
                                            <select name="uf" class="form-control">
                                                <option value=""></option>
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espirito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PR">Paraná</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SP">São Paulo</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="TO">Tocantins</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <label for="">Nacionalidade</label>
                                            <input type="text" name="nacionalidade" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="">natural</label>
                                            <input type="text" name="natural" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">RG</label>
                                            <input type="text" name="rg" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">CPF</label>
                                            <input type="text" name="email" oninput="mascara(this)" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Cargo</label>
                                            <input type="text" name="cargo" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Nível</label>
                                            <input type="text" name="nivel" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Lotação</label>
                                            <input type="text" name="lotacao" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Pai</label>
                                            <input type="text" name="pai" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Mãe</label>
                                            <input type="text" name="mae" class="form-control">
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
