@extends('layouts.app')
@extends('navbardashboard')


@section('showmenu')

    <div class="container-fluid">
        <div class="form-group card mb-8">
            <div class="card-body">
                <div class="card-title">
                    <h5>Detalhes</h5>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th colspan="3">Tipo</th>
                    </thead>
                    <td colspan="3">
                    <th>Comida</th>
                    <th>Bebida</th>
                    <th>Sobremesa</th>
                    </td>

                    <tbody>
                        <tr>
                            <td>{{ $menu->nome }}</td>
                            <td>{{ $menu->descricao }}</td>
                            <td>{{ $menu->valor }}</td>
                            {{-- <td>{{ $table->valor }}</td>
                            <td>{{ $table->comida }}</td>
                            <td>{{ $table->bebida }}</td>
                            <td>{{ $table->sobremesa }}</td> --}}
                        </tr>
                    </tbody>
                </table>
                {{-- <form method="POST" action="{{ route('menu.destroy', ['id'=>$menu->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
                <form method="GET" action=" {{ route('menu.edit', $menu->id) }}">
                <button type="submit" class="btn btn-warning">Editar</button>
                </form> --}}
            </div>
        </div>
    </div>

@endsection
