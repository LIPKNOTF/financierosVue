@extends('index')
@section('titulo','alumnos')
@section('contenido')
<div id="apiAlumno">
  <div class="t">Alumnos</div>
  <!-- Button trigger modal -->
  <button type="button" class="btn-agregar" data-bs-toggle="modal" data-bs-target="#staticBackdrop" @click="mostrarModal()">
    AGREGAR
  </button>

  <table class="display respoññnsive nowrap" style="width:100%" id="dataPlanes">
    <thead>
      <tr>
        <th class="boder-inicio">NOMBRES</th>
        <th>APELLIDO PATERNO</th>
        <th>APELLIDO MATERNO</th>
        <th>GRADO</th>
        <th>GRUPO</th>
        <th>CARRERA</th>
        <th>MATRICULA</th>
        <th>TURNO</th>
        <th class="boder-fin">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="alu in alumnos">
        <td>@{{alu.nombres}}</td>
        <td>@{{alu.apellido_p}}</td>
        <td>@{{alu.apellido_m}}</td>
        <td>@{{alu.grado}}</td>
        <td>@{{alu.grupo}}</td>
        <td>@{{alu.carrera}}</td>
        <td>@{{alu.matricula}}</td>
        <td>@{{alu.turno}}</td>
        <td>
          <button type="submit" class="btn-edit" @click="editarAlumno(alu.id)"><i class="fa-solid fa-pen"></i></button>
          <button type="button" class="btn-delete" @click="eliminarAlumno(alu.id, alu.matricula, alu.nombres, alu.apellido_p, alu.apellido_m)"><i class="fa-solid fa-trash"></i></button>

        </td>
      </tr>
    </tbody>
  </table>

  <div class="modal fade" id="modalAlumno" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel" v-if="agregando==true">AGREGAR ALUMNO</h1>
          <h1 class="modal-title fs-5" id="staticBackdropLabel" v-if="agregando==false">EDITAR ALUMNO</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>

            <input placeholder="MATRICULA" v-model="matricula" autofocus required type="text" class="mt-1 block w-full"></input>

            <input placeholder="nombres" v-model="nombres" autofocus required type="text" class="mt-1 block w-full"></input>

            <input placeholder="apellido_p" v-model="apellido_p" autofocus required type="text" class="mt-1 block w-full"></input>

            <input placeholder="apellido_m" v-model="apellido_m" autofocus required type="text" class="mt-1 block w-full"></input>

            <input placeholder="grado" v-model="grado" autofocus required type="text" class="mt-1 block w-full"></input>

            <input placeholder="grupo" v-model="grupo" autofocus required type="text" class="mt-1 block w-full"></input>

            <input placeholder="carrera" v-model="carrera" autofocus required type="text" class="mt-1 block w-full"></input>

            <input placeholder="turno" v-model="turno" autofocus required type="text" class="mt-1 block w-full"></input>


          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" @click="agregarAlumno()" v-if="agregando==true">GUARDAR</button>
          <button type="button" class="btn btn-warning" @click="actualizarAlumno()" v-if="agregando==false">GUARDAR</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection


@push('scripts')
<script src="js/vue-resource.js"></script>
<script src="js/apis/apiAlumno.js"></script>
@endpush
<input type="hidden" name="route" value="{{ url('/') }}">