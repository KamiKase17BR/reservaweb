@extends('layouts.app')
@extends('navbardashboard')


<div class="bg-image-restaurant">
    <div class="container-fluid">

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Adicionar estabelecimento</div>
                <div class="card-body">
                    <a href="{{ route('restaurant.insert') }}">
                        <button type="button" class="btn btn-success">Adicionar +</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Ver estabelecimento</div>
                <div class="card-body">
                    <a href="{{ route('restaurant.show') }}">
                        <button type="button" class="btn btn-info">Ver</button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
