@extends('layouts.app')
@extends('navbardashboard')


@section('listtable')

    <div class="container-fluid">
        <div class="form-group card mb-8">
            <div class="card-body">
                <div class="card-title">
                    <h5>Veja todas as suas mesas</h5>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <th>Mesa</th>
                        <th>Lugares</th>
                        <th>Descrição</th>
                        <th>Detalhes</th>
                    </thead>
                    <tbody>
                        @foreach ($table as $tables)
                            <tr>
                                <td>{{ $tables->id }}</td>
                                <td>{{ $tables->lugares }}</td>
                                <td>{{ $tables->descricao }}</td>
                                <td>
                                    <a href="{{ route('table.show', $tables->id) }}">
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
