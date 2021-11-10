@extends('layouts.app')
@extends('navbardashboard')


@section('inserttable')
    <div class="container">
        <div class="form-group card mb-8">
            <div class="card-body">
                <div class="card-title">
                    <h5>Cadastre suas mesas</h5>
                </div>
                <div class="row">
                    Escolha sua melhor foto:
                    <div class="card md-2" style="height: 2rem;">
                        <input type="file" class="form-control-file">
                    </div>
                </div>
                <div class="row">
                    <label for="inputname">Características:</label>
                    <input type="text" class="form-control" id="inputname">
                </div>
                <div class="form-row">
                    <label for="inputLugares">Lugares</label>
                    <div class="col">
                        <label class="radio-inline">
                            <input type="radio" name="optradio">&nbsp;2 &nbsp;
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optradio">&nbsp;4 &nbsp;
                        </label>
                        <label for="inputlugares">Quantos lugares?</label>
                        <input type="text" class="col-sm-3 my-1" id="lugaresany">
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
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">08:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">09:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">10:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">11:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">12:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">13:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">14:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">15:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">16:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">17:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">18:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">19:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">20:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">21:00</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">22:00</label>
                </div>
            </div>
            <div class="card-body row">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </div>
    </div>

    </div>
@endsection
