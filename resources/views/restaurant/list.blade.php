@extends('layouts.app')
@extends('navbardashboard')


@section('listrestaurant')

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
                    </thead>
                    <tbody>
                        <td>{{ $restaurant->nomerestaurante }}</td>
                        <td>{{ $restaurant->descricao }}</td>
                        <td>{{ $restaurant->cnpj }}</td>
                        <td>{{ $restaurant->ie }}</td>
                    </tbody>
                    <thead>
                        <th>CEP</th>
                        <th>Endereço</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                    </thead>
                    <tbody>
                        <td>{{ $restaurant->cep }}</td>
                        <td>{{ $restaurant->endereco }}</td>
                        <td>{{ $restaurant->bairro }}</td>
                        <td>{{ $restaurant->cidade }}</td>
                        <td>{{ $restaurant->estado }}</td>
                    </tbody>

                    <thead>
                        <th>Representante</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>Email</th>
                    </thead>
                    <tbody>
                        <td>{{ $restaurant->representante }}</td>
                        <td>{{ $restaurant->rg }}</td>
                        <td>{{ $restaurant->cpf }}</td>
                        <td>{{ $restaurant->email }}</td>
                    </tbody>
                </table>
                <div class="body-card">
                    <form method="POST" action="{{ route('restaurant.destroy', ['id' => $restaurant->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                    <p></p>
                    <form method="GET" action=" {{ route('restaurant.edit', $restaurant->id) }}">
                        <button type="submit" class="btn btn-warning">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
