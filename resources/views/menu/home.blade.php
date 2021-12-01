@extends('layouts.app')
@extends('navbardashboard')


<div class="bg-image-menu">
    <div class="container">

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Adicionar opções</div>
                <div class="card-body">
                    <a href={{route('menu.insert')}}>
                        <button type="button" class="btn btn-success">Adicionar +</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Ver opções</div>
                <div class="card-body">
                    <a href="{{route('menu.list')}}">
                        <button type="button" class="btn btn-info">Ver</button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
