<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nuevo Paciente
        </h2>
     <?php $__env->endSlot(); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/pacientes.css')); ?>">

    <div class="formulario-paciente">

        <div class="formulario-titulo">

            <h1>Registrar nuevo paciente</h1>

            <p> Complete los datos del paciente. </p>

        </div>


        <form action="<?php echo e(route('pacientes.store')); ?>"
              method="POST">

            <?php echo csrf_field(); ?>


            <!-- DATOS PERSONALES -->

            <div class="seccion-formulario">

                <h2>Datos personales</h2>

                <div class="form-grid">

                    <div class="form-grupo">
                        <label>Apellido y Nombre</label>

                        <input
                            type="text"
                            name="apellido_nombre"
                            value="<?php echo e(old('apellido_nombre')); ?>"
                            required>
                    </div>


                    <div class="form-grupo">
                        <label>DNI</label>

                        <input
                            type="text"
                            name="dni"
                            value="<?php echo e(old('dni')); ?>"
                            required>
                    </div>


                    <div class="form-grupo">
                        <label>Edad</label>

                        <input
                            type="number"
                            name="edad"
                            value="<?php echo e(old('edad')); ?>"
                            required>
                    </div>


                    <div class="form-grupo">
                        <label>Fecha de nacimiento</label>

                        <input
                            type="date"
                            name="fecha_nacimiento"
                            value="<?php echo e(old('fecha_nacimiento')); ?>"
                            required>
                    </div>


                    <div class="form-grupo">
                        <label>Domicilio</label>

                        <input
                            type="text"
                            name="domicilio"
                            value="<?php echo e(old('domicilio')); ?>"
                            required>
                    </div>


                    <div class="form-grupo">
                        <label>Celular</label>

                        <input
                            type="text"
                            name="celular"
                            value="<?php echo e(old('celular')); ?>"
                            required>
                    </div>


                    <div class="form-grupo">
                        <label>Ocupación</label>

                        <input
                            type="text"
                            name="ocupacion"
                            value="<?php echo e(old('ocupacion')); ?>"
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
                            value="<?php echo e(old('obra_social')); ?>"
                            required>

                    </div>


                    <div class="form-grupo">

                        <label>Número de Afiliación</label>

                        <input
                            type="text"
                            name="numero_afiliacion"
                            value="<?php echo e(old('numero_afiliacion')); ?>"
                            required>

                    </div>

                </div>

            </div>


            <!-- TRATAMIENTO -->

            <div class="seccion-formulario">

                <h2>Datos del tratamiento</h2>

                <div class="form-grid">

                    <div class="form-grupo">

                        <label>Profesional que deriva</label>

                        <input
                            type="text"
                            name="profesional_deriva"
                            value="<?php echo e(old('profesional_deriva')); ?>"
                            required>

                    </div>


                    <div class="form-grupo">

                        <label>Fecha de inicio del tratamiento</label>

                        <input
                            type="date"
                            name="fecha_inicio_tratamiento"
                            value="<?php echo e(old('fecha_inicio_tratamiento')); ?>">

                    </div>


                    <div class="form-grupo">

                        <label>Fecha de cirugía</label>

                        <input
                            type="date"
                            name="fecha_cirugia"
                            value="<?php echo e(old('fecha_cirugia')); ?>">

                    </div>


                    <div class="form-grupo">

                        <label>Sesiones</label>

                        <input
                            type="number"
                            name="sesiones"
                            value="<?php echo e(old('sesiones')); ?>"
                            required>

                    </div>


                    <div class="form-grupo form-grupo-completo">

                        <label>TTO</label>

                        <textarea
                            name="tto"><?php echo e(old('tto')); ?></textarea>

                    </div>


                    <div class="form-grupo form-grupo-completo">

                        <label>Diagnóstico</label>

                        <textarea
                            name="diagnostico"><?php echo e(old('diagnostico')); ?></textarea>

                    </div>


                    <div class="form-grupo">

                        <label>Médico asignado</label>

                        <input
                            type="text"
                            name="medico_asignado"
                            value="<?php echo e(old('medico_asignado')); ?>"
                            required>

                    </div>

                </div>

            </div>


            <!-- BOTONES -->

            <div class="botones-formulario">

                <button  type="submit" class="btn-paciente btn-nuevo">  Guardar paciente </button>

                <a href="<?php echo e(route('pacientes.index')); ?>"  class="btn-paciente btn-todos">  Cancelar </a>

            </div>

        </form>

    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\formulario\2026\miba_laravel\resources\views/pacientes/create.blade.php ENDPATH**/ ?>