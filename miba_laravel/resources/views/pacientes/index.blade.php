<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Gestión de Pacientes
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/pacientes.css') }}">

    <div class="pacientes-container">

        @if(session('success'))
            <div class="mensaje-exito">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mensaje-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <!-- ENCABEZADO -->

        <div class="pacientes-header">

            <h1>Pacientes registrados</h1>

            <div class="botones-principales">

                <a href="{{ route('pacientes.create') }}"
                   class="btn-paciente btn-nuevo">   Nuevo Paciente </a>

                <a href="#"
                   class="btn-paciente btn-turnos">
                    Turnos
                </a>

            </div>

        </div>


        <!-- BUSCADOR -->

        <div class="buscador">

            <div class="buscador-titulo">
                Buscar paciente por DNI
            </div>

            <form action="{{ route('pacientes.index') }}"
                  method="GET"
                  class="buscador-form">

                <input
                    type="text"
                    name="dni"
                    class="buscador-input"
                    placeholder="Ingrese el DNI del paciente"
                    value="{{ $dni ?? '' }}"
                >

                <button type="submit"
                        class="btn-paciente btn-buscar">
                    Buscar
                </button>

                <a href="{{ route('pacientes.index') }}"
                   class="btn-paciente btn-todos">
                    Mostrar todos
                </a>

            </form>

        </div>


        <!-- TABLA -->

        <div class="tabla-contenedor">

            <table class="tabla-pacientes">

                <thead>

                    <tr>
                        <th>N.º</th>
                        <th>Apellido y Nombre</th>
                        <th>DNI</th>
                        <th>Edad</th>
                        <th>Médico</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($pacientes as $paciente)

                        <tr>

                          <td>
                            <strong>#{{ $loop->iteration }}</strong>
                          </td>

                            <td>
                                {{ $paciente->apellido_nombre }}
                            </td>

                            <td>
                                {{ $paciente->dni }}
                            </td>

                            <td>
                                {{ $paciente->edad }}
                            </td>

                            <td>
                                {{ $paciente->medico_asignado }}
                            </td>

                            <td>

                                <div class="acciones">

                                    <a href="{{ route('pacientes.show', $paciente->id) }}"
                                       class="btn-accion btn-ver">
                                        Ver
                                    </a>

                                    <a href="{{ route('pacientes.edit', $paciente->id) }}"
                                       class="btn-accion btn-editar">
                                        Editar
                                    </a>

                                    <form
                                        action="{{ route('pacientes.destroy', $paciente->id) }}"
                                        method="POST"
                                        class="form-eliminar">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn-accion btn-eliminar"
                                            onclick="return confirm('¿Está seguro de eliminar este paciente?')">

                                            Eliminar

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6"
                                style="text-align:center; padding:30px;">

                                No se encontraron pacientes.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</x-app-layout>