@extends('layouts.app')
@extends('navbardashboard')


@section('showrestaurant')

    <div class="container-fluid">
        <div class="form-group card mb-8">
            <div class="card-body">
                <div class="card-title">
                    <h5>Veja os dados do seu estabelecimento</h5>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>CNPJ</th>
                        <th>IE</th>
                        <th>CEP</th>
                        <th>Endereço</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Representante</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>Email</th>
                    </thead>
                    <tbody>
                        @foreach ($restaurant as $restaurants)
                            <tr>
                                <td>{{ $restaurants->nomerestaurante }}</td>
                                <td>{{ $restaurants->descricao }}</td>
                                <td>{{ $restaurants->cnpj }}</td>
                                <td>{{ $restaurants->ie }}</td>
                                <td>{{ $restaurants->cep }}</td>
                                <td>{{ $restaurants->endereco }}</td>
                                <td>{{ $restaurants->bairro }}</td>
                                <td>{{ $restaurants->cidade }}</td>
                                <td>{{ $restaurants->estado }}</td>
                                <td>{{ $restaurants->representante }}</td>
                                <td>{{ $restaurants->rg }}</td>
                                <td>{{ $restaurants->cpf }}</td>
                                <td>{{ $restaurants->email }}</td>
                                <td>
                                    <a href="#">
                                    <button type="button" class="btn btn-info">Ver</button>
                                    </a>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
