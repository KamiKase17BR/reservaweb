@extends('layouts.app')
@extends('navbardashboard')


<div class="bg-image-table">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Ver proximos pedidos</div>
                    <div class="card-body">
                        <a href="{{ route('table.insert') }}">
                            <button type="button" class="btn btn-info">Adicionar +</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Ver pedidos anteriores</div>
                    <div class="card-body">
                        <a href="{{ route('table.edit') }}">
                            <button type="button" class="btn btn-warning">Editar</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">Excluir </div>
                        <div class="card-body">
                            <a href="{{ route('table.delete') }}">
                            <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
