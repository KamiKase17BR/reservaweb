@extends('layouts.app')
@extends('navbardashboard')


@section('listmenu')

    <div class="container-fluid">
        <div class="form-group card mb-8">
            <div class="card-body">
                <div class="card-title">
                    <h5>Veja todas as suas opções de cardápio</h5>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                    </thead>
                    <tbody>
                        @foreach ($menu as $menus)
                            <tr>
                                <td>{{ $menus->nome }}</td>
                                <td>{{ $menus->descricao }}</td>
                                <td>{{ $menus->valor }}</td>
                                <td>
                                    <a href="{{ route('menus.show', $menus->id) }}">
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
