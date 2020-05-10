@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

  


                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Posicion</th>
                            <th scope="col">Salario</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="dato in datos">
                            <th scope="row">@{{ dato.id}}</th>
                            <td>@{{ dato.nombre}}</td>
                            <td>@{{ dato.posicion}}</td>
                            <td>@{{ dato.salario}}</td>
                            <td>@mdo</td>
                          </tr>
                         
                        </tbody>
                      </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
