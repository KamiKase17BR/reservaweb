@extends('layouts.app')
@extends('navbardashboard')


@section('showtable')

    <div class="container-fluid">
        <div class="form-group card mb-8">
            <div class="card-body">
                <div class="card-title">
                    <h5>Detalhes</h5>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <th>Mesa</th>
                        <th>Lugares</th>
                        <th>Descrição</th>
                        <th colspan="15">Horários</th>
                    </thead>
                    <td colspan="3">
                    <th>08:00</th>
                    <th>09:00</th>
                    <th>10:00</th>
                    <th>11:00</th>
                    <th>12:00</th>
                    <th>13:00</th>
                    <th>14:00</th>
                    <th>15:00</th>
                    <th>16:00</th>
                    <th>17:00</th>
                    <th>18:00</th>
                    <th>19:00</th>
                    <th>20:00</th>
                    <th>21:00</th>
                    <th>22:00</th>
                    </td>

                    <tbody>
                        <tr>
                            <td>{{ $table->id }}</td>
                            <td>{{ $table->lugares }}</td>
                            <td>{{ $table->descricao }}</td>
                            <td>{{ $table->hour08 }}</td>
                            <td>{{ $table->hour09 }}</td>
                            <td>{{ $table->hour10 }}</td>
                            <td>{{ $table->hour11 }}</td>
                            <td>{{ $table->hour12 }}</td>
                            <td>{{ $table->hour13 }}</td>
                            <td>{{ $table->hour14 }}</td>
                            <td>{{ $table->hour15 }}</td>
                            <td>{{ $table->hour16 }}</td>
                            <td>{{ $table->hour17 }}</td>
                            <td>{{ $table->hour18 }}</td>
                            <td>{{ $table->hour19 }}</td>
                            <td>{{ $table->hour20 }}</td>
                            <td>{{ $table->hour21 }}</td>
                            <td>{{ $table->hour22 }}</td>
                        </tr>
                    </tbody>
                </table>
                <form method="POST" action="{{ route('table.destroy', ['id'=>$table->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
                <form method="GET" action=" {{ route('table.edit', $table->id) }}">
                <button type="submit" class="btn btn-warning">Editar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
