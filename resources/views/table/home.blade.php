@extends('layouts.app')
@extends('navbardashboard')


<div class="bg-image-table">
    <div class="container">

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Adicionar mesas</div>
                <div class="card-body">
                    <a href="{{ route('table.insert') }}">
                        <button type="button" class="btn btn-success">Adicionar +</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Ver mesas</div>
                <div class="card-body">
                    <a href="{{ route('table.list') }}">
                        <button type="button" class="btn btn-info">Ver</button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
