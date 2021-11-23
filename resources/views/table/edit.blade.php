@extends('layouts.app')
@extends('navbardashboard')


@section('edittable')

    <div class="container-fluid">
        <div class="form-group card mb-8">
            <div class="card-body">
                <div class="card-title">
                    <h5>Editar</h5>
                </div>
                <form method="POST" action={{ route('table.update', $table->id) }} enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        Escolha sua melhor foto:
                        <div class="card md-2" style="height: 2rem;">
                            <input type="file" name="image" class="form-control-file">
                        </div>
                    </div>
                    <div class="row">
                        <label for="inputname">Características:</label>
                        <input type="text" class="form-control" name="particulars" value="{{$table->descricao}}">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="inputLugares">Lugares</label>
                            <label class="radio-inline">
                                <input type="radio" name="place" value="radio2">&nbsp;2 &nbsp;
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="place" value="radio4">&nbsp;4 &nbsp;
                            </label>
                            <label for="inputlugares">Quantos lugares?</label>
                            <input type="text" class="col-sm-3 my-1" name="placesany" value="">
                            <small id="helplugares" class="text-muted">
                                Cuidado, para o cliente reservar a mesa tem que ocupar 50% dos lugares.
                            </small>
                        </div>
                    </div>
                    <div class="row">
                        <label for="inputlugares">Quais os horários das mesas:</label>
                    </div>
                    <div class="col-md-5">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[08:00]" value="true"<?php if($table->hour08 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox1">08:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[09:00]" value="true" <?php if($table->hour09 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">09:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[10:00]" value="true" <?php if($table->hour10 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">10:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[11:00]" value="true" <?php if($table->hour11 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">11:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[12:00]" value="true" <?php if($table->hour12 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">12:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[13:00]" value="true" <?php if($table->hour13 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">13:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[14:00]" value="true" <?php if($table->hour14 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">14:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[15:00]" value="true" <?php if($table->hour15 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">15:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[16:00]" value="true" <?php if($table->hour16 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">16:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[17:00]" value="true" <?php if($table->hour17 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">17:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[18:00]" value="true" <?php if($table->hour18 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">18:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[19:00]" value="true" <?php if($table->hour19 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">19:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[20:00]" value="true" <?php if($table->hour20 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">20:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[21:00]" value="true" <?php if($table->hour21 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">21:00</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="checkhour[22:00]" value="true" <?php if($table->hour22 == '1'){ echo "checked"; } ?>>
                            <label class="form-check-label" for="inlineCheckbox2">22:00</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Atualizar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
