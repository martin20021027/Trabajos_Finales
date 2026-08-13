<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Paciente
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/pacientes.css') }}">

    <div class="formulario-paciente">

        <div class="formulario-titulo">

            <h1>Editar paciente #{{ $paciente->id }}</h1>

            <p>
                Modifique los datos que desea actualizar.
            </p>

        </div>


        <form action="{{ route('pacientes.update', $paciente->id) }}"
              method="POST">

            @csrf
            @method('PUT')


            <!-- DATOS PERSONALES -->

            <div class="seccion-formulario">

                <h2>Datos personales</h2>

                <div class="form-grid">

                    <div class="form-grupo">
                        <label>Apellido y Nombre</label>

                        <input
                            type="text"
                            name="apellido_nombre"
                            value="{{ old('apellido_nombre', $paciente->apellido_nombre) }}"
                            required>
                    </div>


                    <div class="form-grupo">
                        <label>DNI</label>

                        <input
                            type="text"
                            name="dni"
                            value="{{ old('dni', $paciente->dni) }}"
                            required>
                    </div>


                    <div class="form-grupo">
                        <label>Edad</label>

                        <input
                            type="number"
                            name="edad"
                            value="{{ old('edad', $paciente->edad) }}"
                            required>
                    </div>


                    <div class="form-grupo">
                        <label>Fecha de nacimiento</label>

                        <input
                            type="date"
                            name="fecha_nacimiento"
                            value="{{ old('fecha_nacimiento', $paciente->fecha_nacimiento) }}"
                            required>
                    </div>


                    <div class="form-grupo">
                        <label>Domicilio</label>

                        <input
                            type="text"
                            name="domicilio"
                            value="{{ old('domicilio', $paciente->domicilio) }}"
                            required>
                    </div>


                    <div class="form-grupo">
                        <label>Celular</label>

                        <input
                            type="text"
                            name="celular"
                            value="{{ old('celular', $paciente->celular) }}"
                            required>
                    </div>


                    <div class="form-grupo">
                        <label>Ocupación</label>

                        <input
                            type="text"
                            name="ocupacion"
                            value="{{ old('ocupacion', $paciente->ocupacion) }}"
                            required>
                    </div>

                </div>

            </div>


            <!-- OBRA SOCIAL -->

            <div class="seccion-formulario">

                <h2>Obra social</h2>

                <div class="form-grid">

                    <div class="form-grupo">

                        <label>Obra Social</label>

                        <input
                            type="text"
                            name="obra_social"
                            value="{{ old('obra_social', $paciente->obra_social) }}"
                            required>

                    </div>


                    <div class="form-grupo">

                        <label>Número de Afiliación</label>

                        <input
                            type="text"
                            name="numero_afiliacion"
                            value="{{ old('numero_afiliacion', $paciente->numero_afiliacion) }}"
                            required>

                    </div>

                </div>

            </div>


            <!-- DATOS DEL TRATAMIENTO -->

            <div class="seccion-formulario">

                <h2>Datos del tratamiento</h2>

                <div class="form-grid">

                    <div class="form-grupo">

                        <label>Profesional que deriva</label>

                        <input
                            type="text"
                            name="profesional_deriva"
                            value="{{ old('profesional_deriva', $paciente->profesional_deriva) }}"
                            required>

                    </div>


                    <div class="form-grupo">

                        <label>Fecha de inicio del tratamiento</label>

                        <input
                            type="date"
                            name="fecha_inicio_tratamiento"
                            value="{{ old('fecha_inicio_tratamiento', $paciente->fecha_inicio_tratamiento) }}">

                    </div>


                    <div class="form-grupo">

                        <label>Fecha de cirugía</label>

                        <input
                            type="date"
                            name="fecha_cirugia"
                            value="{{ old('fecha_cirugia', $paciente->fecha_cirugia) }}">

                    </div>


                    <div class="form-grupo">

                        <label>Sesiones</label>

                        <input
                            type="number"
                            name="sesiones"
                            value="{{ old('sesiones', $paciente->sesiones) }}"
                            required>

                    </div>


                    <div class="form-grupo form-grupo-completo">

                        <label>TTO</label>

                        <textarea
                            name="tto">{{ old('tto', $paciente->tto) }}</textarea>

                    </div>


                    <div class="form-grupo form-grupo-completo">

                        <label>Diagnóstico</label>

                        <textarea
                            name="diagnostico">{{ old('diagnostico', $paciente->diagnostico) }}</textarea>

                    </div>


                    <div class="form-grupo">

                        <label>Médico asignado</label>

                        <input
                            type="text"
                            name="medico_asignado"
                            value="{{ old('medico_asignado', $paciente->medico_asignado) }}"
                            required>

                    </div>

                </div>

            </div>


            <!-- BOTONES -->

            <div class="botones-formulario">

                <button
                    type="submit"
                    class="btn-paciente btn-nuevo">

                    Guardar cambios

                </button>


                <a
                    href="{{ route('pacientes.index') }}"
                    class="btn-paciente btn-todos">

                    Cancelar

                </a>

            </div>

        </form>

    </div>

</x-app-layout>