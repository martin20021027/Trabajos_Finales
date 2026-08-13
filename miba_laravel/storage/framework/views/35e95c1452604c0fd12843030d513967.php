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
            Datos del Paciente
        </h2>
     <?php $__env->endSlot(); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/pacientes.css')); ?>">

    <div class="datos-paciente">

        <div class="datos-header">

            <h1>
                Paciente #<?php echo e($paciente->id); ?>

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
                    <?php echo e($paciente->apellido_nombre); ?>

                </div>

                <div class="dato">
                    <strong>DNI:</strong><br>
                    <?php echo e($paciente->dni); ?>

                </div>

                <div class="dato">
                    <strong>Edad:</strong><br>
                    <?php echo e($paciente->edad); ?> años
                </div>

                <div class="dato">
                    <strong>Fecha de nacimiento:</strong><br>
                    <?php echo e($paciente->fecha_nacimiento); ?>

                </div>

                <div class="dato">
                    <strong>Domicilio:</strong><br>
                    <?php echo e($paciente->domicilio); ?>

                </div>

                <div class="dato">
                    <strong>Celular:</strong><br>
                    <?php echo e($paciente->celular); ?>

                </div>

                <div class="dato">
                    <strong>Ocupación:</strong><br>
                    <?php echo e($paciente->ocupacion); ?>

                </div>

            </div>

        </div>


        <!-- OBRA SOCIAL -->

        <div class="datos-seccion">

            <h2>Obra social</h2>

            <div class="datos-grid">

                <div class="dato">
                    <strong>Obra Social:</strong><br>
                    <?php echo e($paciente->obra_social); ?>

                </div>

                <div class="dato">
                    <strong>Número de Afiliación:</strong><br>
                    <?php echo e($paciente->numero_afiliacion); ?>

                </div>

            </div>

        </div>


        <!-- DATOS DEL TRATAMIENTO -->

        <div class="datos-seccion">

            <h2>Datos del tratamiento</h2>

            <div class="datos-grid">

                <div class="dato">
                    <strong>Profesional que deriva:</strong><br>
                    <?php echo e($paciente->profesional_deriva); ?>

                </div>

                <div class="dato">
                    <strong>Médico asignado:</strong><br>
                    <?php echo e($paciente->medico_asignado); ?>

                </div>

                <div class="dato">
                    <strong>Fecha de inicio del tratamiento:</strong><br>

                    <?php echo e($paciente->fecha_inicio_tratamiento ?: 'No registrado'); ?>


                </div>

                <div class="dato">
                    <strong>Fecha de cirugía:</strong><br>

                    <?php echo e($paciente->fecha_cirugia ?: 'No registrado'); ?>


                </div>

                <div class="dato">
                    <strong>Sesiones:</strong><br>
                    <?php echo e($paciente->sesiones); ?>

                </div>

                <div class="dato form-grupo-completo">
                    <strong>TTO:</strong><br>

                    <?php echo e($paciente->tto ?: 'No registrado'); ?>


                </div>

                <div class="dato form-grupo-completo">
                    <strong>Diagnóstico:</strong><br>

                    <?php echo e($paciente->diagnostico ?: 'No registrado'); ?>


                </div>

            </div>

        </div>


        <!-- BOTONES -->

        <div class="datos-acciones">

            <a href="<?php echo e(route('pacientes.edit', $paciente->id)); ?>"  class="btn-paciente btn-editar">    Editar </a>

            <a href="<?php echo e(route('pacientes.index')); ?>" class="btn-paciente btn-todos"> Volver a pacientes </a>

        </div>

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
<?php endif; ?><?php /**PATH C:\laragon\www\formulario\2026\miba_laravel\resources\views/pacientes/show.blade.php ENDPATH**/ ?>