<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Mostrar todos los pacientes y permitir búsqueda por DNI.
     */
    public function index(Request $request)
    {
        $dni = $request->input('dni');

        if ($dni) {
            $pacientes = Paciente::where('dni', 'like', '%' . $dni . '%')
                ->orderBy('id')
                ->get();
        } else {
            $pacientes = Paciente::orderBy('id')->get();
        }

        return view('pacientes.index', compact('pacientes', 'dni'));
    }

    /**
     * Mostrar formulario para crear paciente.
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Guardar paciente.
     */
    public function store(Request $request)
    {
        $request->validate([
            'apellido_nombre' => 'required|string|max:255',
            'dni' => 'required|string|max:20',
            'edad' => 'required|integer|min:0',
            'fecha_nacimiento' => 'required|date',
            'domicilio' => 'required|string|max:255',
            'celular' => 'required|string|max:30',
            'ocupacion' => 'required|string|max:255',
            'obra_social' => 'required|string|max:255',
            'numero_afiliacion' => 'required|string|max:255',
            'profesional_deriva' => 'required|string|max:255',
            'fecha_inicio_tratamiento' => 'nullable|date',
            'fecha_cirugia' => 'nullable|date',
            'tto' => 'nullable|string',
            'sesiones' => 'required|integer|min:0',
            'diagnostico' => 'nullable|string',
            'medico_asignado' => 'required|string|max:255',
        ]);

        Paciente::create($request->only([
            'apellido_nombre',
            'dni',
            'edad',
            'fecha_nacimiento',
            'domicilio',
            'celular',
            'ocupacion',
            'obra_social',
            'numero_afiliacion',
            'profesional_deriva',
            'fecha_inicio_tratamiento',
            'fecha_cirugia',
            'tto',
            'sesiones',
            'diagnostico',
            'medico_asignado',
        ]));

        return redirect()
            ->route('pacientes.index')
            ->with('success', 'Paciente guardado correctamente.');
    }

    /**
     * Mostrar datos completos del paciente.
     */
    public function show(Paciente $paciente)
    {
        return view('pacientes.show', compact('paciente'));
    }

    /**
     * Mostrar formulario de edición.
     */
    public function edit(Paciente $paciente)
    {
        return view('pacientes.edit', compact('paciente'));
    }

    /**
     * Actualizar paciente.
     */
    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'apellido_nombre' => 'required|string|max:255',
            'dni' => 'required|string|max:20',
            'edad' => 'required|integer|min:0',
            'fecha_nacimiento' => 'required|date',
            'domicilio' => 'required|string|max:255',
            'celular' => 'required|string|max:30',
            'ocupacion' => 'required|string|max:255',
            'obra_social' => 'required|string|max:255',
            'numero_afiliacion' => 'required|string|max:255',
            'profesional_deriva' => 'required|string|max:255',
            'fecha_inicio_tratamiento' => 'nullable|date',
            'fecha_cirugia' => 'nullable|date',
            'tto' => 'nullable|string',
            'sesiones' => 'required|integer|min:0',
            'diagnostico' => 'nullable|string',
            'medico_asignado' => 'required|string|max:255',
        ]);

        $paciente->update($request->only([
            'apellido_nombre',
            'dni',
            'edad',
            'fecha_nacimiento',
            'domicilio',
            'celular',
            'ocupacion',
            'obra_social',
            'numero_afiliacion',
            'profesional_deriva',
            'fecha_inicio_tratamiento',
            'fecha_cirugia',
            'tto',
            'sesiones',
            'diagnostico',
            'medico_asignado',
        ]));

        return redirect()
            ->route('pacientes.index')
            ->with('success', 'Paciente actualizado correctamente.');
    }

    /**
     * Eliminar paciente.
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return redirect()
            ->route('pacientes.index')
            ->with('success', 'Paciente eliminado correctamente.');
    }
}