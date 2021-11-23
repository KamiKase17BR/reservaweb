@extends('layouts.app')
@extends('navbardashboard')


@section('editrestaurant')
    <form method="POST" action={{ route('restaurant.update', $restaurant->id) }} enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="container-fluid">
            <div class="form-group card mb-6">
                <div class="card-body">
                    <div class="card-title">
                        <h5>Edite o estabelecimento</h5>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="name">Nome do restaurante</label>
                            <input type="text" class="form-control" name="name" value="{{$restaurant->nomerestaurante}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="name">Descrição:</label>
                            <input type="text" class="form-control" name="particulars" value="{{$restaurant->descricao}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            Escolha a melhor foto do seu ambiente:
                            <div class="card md-2" style="height: 2rem;">
                                <input type="file" name="image" class="form-control-file">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" class="form-control" name="cnpj" value="{{$restaurant->cnpj}}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="ie">IE</label>
                            <input type="text" class="form-control" name="ie" value="{{$restaurant->ie}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="zip">CEP</label>
                            <input type="text" class="form-control" name="zip" value="{{$restaurant->cep}}">
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="address">Endereco</label>
                                <input type="text" class="form-control" name="address" value="{{$restaurant->endereco}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="neighboor">Bairro</label>
                                <input type="text" class="form-control" name="district" value="{{$restaurant->bairro}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" name="inputCity" value="{{$restaurant->cidade}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Estado</label>
                            <select id="inputState" class="form-control" name="inputState">
                                <option selected>{{$restaurant->estado}}</option>
                                <option>Acre</option>
                                <option>Alagoas</option>
                                <option>Amazonas</option>
                                <option>Bahia</option>
                                <option>Ceará</option>
                                <option>Distrito Federal</option>
                                <option>Espiríto Santo</option>
                                <option>Goiás</option>
                                <option>Maranhão</option>
                                <option>Mato Grosso</option>
                                <option>Mato Grosso do Sul</option>
                                <option>Minas Gerais</option>
                                <option>Pará</option>
                                <option>Paraíba</option>
                                <option>Paraná</option>
                                <option>Pernambuco</option>
                                <option>Piauí</option>
                                <option>Rio de Janeiro</option>
                                <option>Rio Grande do Norte</option>
                                <option>Rio Grande do Sul</option>
                                <option>Rondônia</option>
                                <option>Roraima</option>
                                <option>Santa Catarina</option>
                                <option>São Paulo</option>
                                <option>Sergipe</option>
                                <option>Tocantins</option>
                            </select>
                        </div>

                    </div>
                </div>

                <br>

                <div class="form-group card mb-6">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>Dados do representante legal</h5>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="inputname">Nome Completo</label>
                                <input type="text" class="form-control" name="inputname" value="{{$restaurant->representante}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputrg">RG</label>
                                <input type="text" class="form-control" name="rg" value="{{$restaurant->rg}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputrg">CPF</label>
                                <input type="text" class="form-control" name="cpf" value="{{$restaurant->cpf}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$restaurant->email}}">
                            </div>
                        </div>
                        <div class="card-body row">
                            <button type="submit" class="btn btn-success">Atualizar</button>
                        </div>
                    </div>
                </div>

            </div>
    </form>
@endsection
