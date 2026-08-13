<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Datos del Paciente
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/pacientes.css') }}">

    <div class="datos-paciente">

        <div class="datos-header">

            <h1>
                Paciente #{{ $paciente->id }}
            </h1>

            <p>
                Información completa del paciente.
            </p>

        </div>


        <!-- DATOS PERSONALES -->

        <div class="datos-seccion">

            <h2>Datos personales</h2>

            <div class="datos-grid">

                <div class="dato">
                    <strong>Apellido y Nombre:</strong><br>
                    {{ $paciente->apellido_nombre }}
                </div>

                <div class="dato">
                    <strong>DNI:</strong><br>
                    {{ $paciente->dni }}
                </div>

                <div class="dato">
                    <strong>Edad:</strong><br>
                    {{ $paciente->edad }} años
                </div>

                <div class="dato">
                    <strong>Fecha de nacimiento:</strong><br>
                    {{ $paciente->fecha_nacimiento }}
                </div>

                <div class="dato">
                    <strong>Domicilio:</strong><br>
                    {{ $paciente->domicilio }}
                </div>

                <div class="dato">
                    <strong>Celular:</strong><br>
                    {{ $paciente->celular }}
                </div>

                <div class="dato">
                    <strong>Ocupación:</strong><br>
                    {{ $paciente->ocupacion }}
                </div>

            </div>

        </div>


        <!-- OBRA SOCIAL -->

        <div class="datos-seccion">

            <h2>Obra social</h2>

            <div class="datos-grid">

                <div class="dato">
                    <strong>Obra Social:</strong><br>
                    {{ $paciente->obra_social }}
                </div>

                <div class="dato">
                    <strong>Número de Afiliación:</strong><br>
                    {{ $paciente->numero_afiliacion }}
                </div>

            </div>

        </div>


        <!-- DATOS DEL TRATAMIENTO -->

        <div class="datos-seccion">

            <h2>Datos del tratamiento</h2>

            <div class="datos-grid">

                <div class="dato">
                    <strong>Profesional que deriva:</strong><br>
                    {{ $paciente->profesional_deriva }}
                </div>

                <div class="dato">
                    <strong>Médico asignado:</strong><br>
                    {{ $paciente->medico_asignado }}
                </div>

                <div class="dato">
                    <strong>Fecha de inicio del tratamiento:</strong><br>

                    {{ $paciente->fecha_inicio_tratamiento ?: 'No registrado' }}

                </div>

                <div class="dato">
                    <strong>Fecha de cirugía:</strong><br>

                    {{ $paciente->fecha_cirugia ?: 'No registrado' }}

                </div>

                <div class="dato">
                    <strong>Sesiones:</strong><br>
                    {{ $paciente->sesiones }}
                </div>

                <div class="dato form-grupo-completo">
                    <strong>TTO:</strong><br>

                    {{ $paciente->tto ?: 'No registrado' }}

                </div>

                <div class="dato form-grupo-completo">
                    <strong>Diagnóstico:</strong><br>

                    {{ $paciente->diagnostico ?: 'No registrado' }}

                </div>

            </div>

        </div>


        <!-- BOTONES -->

        <div class="datos-acciones">

            <a href="{{ route('pacientes.edit', $paciente->id) }}"  class="btn-paciente btn-editar">    Editar </a>

            <a href="{{ route('pacientes.index') }}" class="btn-paciente btn-todos"> Volver a pacientes </a>

        </div>

    </div>
</x-app-layout>