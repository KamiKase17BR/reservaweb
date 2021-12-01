@extends('layouts.app')
@extends('navbardashboard')

@section('home')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Mesas</div>
                    <div class="card-body">
                        Você ainda não cadastrou mesas!
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Pedidos</div>
                    <div class="card-body">
                        Sem pedidos ainda!
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
