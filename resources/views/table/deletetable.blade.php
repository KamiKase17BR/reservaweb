@extends('layouts.app')
@extends('navbardashboard')


@section('deletetable')

    <div class="container-fluid">
        <div class="form-group card mb-8">
            <div class="card-body">
                <div class="card-title">
                    <h5>Exclua suas mesas</h5>
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
                        @foreach ($table as $tables)
                            <tr>
                                <td>{{ $tables->id }}</td>
                                <td>{{ $tables->lugares }}</td>
                                <td>{{ $tables->descricao }}</td>
                                <td>{{ $tables->hour08}}</td>
                                <td>{{ $tables->hour09}}</td>
                                <td>{{ $tables->hour10}}</td>
                                <td>{{ $tables->hour11}}</td>
                                <td>{{ $tables->hour12}}</td>
                                <td>{{ $tables->hour13}}</td>
                                <td>{{ $tables->hour14}}</td>
                                <td>{{ $tables->hour15}}</td>
                                <td>{{ $tables->hour16}}</td>
                                <td>{{ $tables->hour17}}</td>
                                <td>{{ $tables->hour18}}</td>
                                <td>{{ $tables->hour19}}</td>
                                <td>{{ $tables->hour20}}</td>
                                <td>{{ $tables->hour21}}</td>
                                <td>{{ $tables->hour22}}</td>
                                <td>
                                    {{-- <form action="{{route('table.destroy', $table->id)}}" method="POST"> --}}

                                    <button type="submit" class="btn btn-danger">Deletar</button>

                                </form>
                                </td>
                            </tr>

                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
