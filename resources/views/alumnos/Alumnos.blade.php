@extends('index')
@section('titulo','alumnos')
@section('contenido')
<div id="apiAlumno">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
@click="mostrarModal()">
  AGREGAR ALUMNOS
</button>

<!-- Modal -->
<div class="modal fade" id="modalAlumno" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h1 class="modal-title fs-5" id="staticBackdropLabel"v-if="agregando==true">AGREGAR ALUMNO</h1>
      <h1 class="modal-title fs-5" id="staticBackdropLabel" v-if="agregando==false">EDITAR ALUMNO</h1>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
    
        <input  placeholder="MATRICULA"
             v-model="matricula" autofocus required type="text" class="mt-1 block w-full"></input>

            <input  placeholder="nombres"
            v-model="nombres" autofocus required type="text" class="mt-1 block w-full"></input>

            <input placeholder="apellido_p"
             v-model="apellido_p" autofocus required type="text" class="mt-1 block w-full"></input>

            <input placeholder="apellido_m"
             v-model="apellido_m" autofocus required type="text" class="mt-1 block w-full"></input>

            <input placeholder="grado"
             v-model="grado" autofocus required type="text" class="mt-1 block w-full"></input>

            <input  placeholder="grupo"
             v-model="grupo" autofocus required type="text" class="mt-1 block w-full"></input>

            <input placeholder="carrera"
            v-model="carrera" autofocus required type="text" class="mt-1 block w-full"></input>

            <input  placeholder="turno"
            v-model="turno" autofocus required type="text" class="mt-1 block w-full"></input>
           
          
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
<table class="table" id="dataPlanes">
  <thead>
    <tr>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDO PATERNO</th>
      <th scope="col">APELLIDO MATERNO</th>
      <th scope="col">GRADO</th>
      <th scope="col">GRUPO</th>
      <th scope="col">CARRERA</th>
      <th scope="col">MATRICULA</th>
      <th scope="col">TURNO</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
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
      <button type="submit" class="btn btn-warning" @click="editarAlumno(alu.id)"><i class="fa-solid fa-pen-to-square"></i></button>
     <button type="button" class="btn btn-danger" @click="eliminarAlumno(alu.id, alu.matricula, alu.nombres, alu.apellido_p, alu.apellido_m)"><i class="fa-solid fa-trash"></i></button>


      </td>
    </tr>
  </tbody>
</table>

</div>

@endsection


@push('scripts')
 <script src="js/bootstrap.bundle.min.js"></script>
<script src="js/vue-resource.js"></script>
<script src="js/apis/apiAlumno.js"></script>

@endpush
<input type="hidden" name="route" value="{{ url('/') }}">