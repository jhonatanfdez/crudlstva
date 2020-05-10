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

                    <button type="button" class="btn btn-outline-primary float-right" @click="NuevoDato()">Nuevo</button> 
                    <br>
                    <br>   


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
                            <td>

                              <button type="button" class="btn btn-outline-info" @click="EditarDato(dato)">Editar</button>
                              <button type="button" class="btn btn-outline-danger" @click="EliminarDato(dato)">Eliminar</button>




                            </td>
                          </tr>
                         
                        </tbody>
                      </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
