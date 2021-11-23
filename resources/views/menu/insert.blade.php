@extends('layouts.app')
@extends('navbardashboard')


@section('insertmenu')
    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="form-group card mb-6">
                <div class="card-body">
                    <div class="card-title">
                        <h5>Cadastre suas opções de pratos e bebidas</h5>
                    </div>
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <label for="name">Nome do prato</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="name">Descrição:</label>
                            <input type="text" class="form-control" name="particulars">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="name">Valor:</label>
                            <input type="text" class="form-control" name="valor" pattern="^\d*(\.\d{0,2})?$" placeholder="0.00">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            Escolha a melhor foto:
                            <div class="card md-2" style="height: 2rem;">
                                <input type="file" name="image" class="form-control-file">
                            </div>
                        </div>
                    </div>

                        <div class="card-body row">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </div>
                </div>

            </div>
    </form>
@endsection
