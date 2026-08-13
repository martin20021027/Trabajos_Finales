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
            Gestión de Pacientes
        </h2>
     <?php $__env->endSlot(); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/pacientes.css')); ?>">

    <div class="pacientes-container">

        <?php if(session('success')): ?>
            <div class="mensaje-exito">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <div class="mensaje-error">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>


        <!-- ENCABEZADO -->

        <div class="pacientes-header">

            <h1>Pacientes registrados</h1>

            <div class="botones-principales">

                <a href="<?php echo e(route('pacientes.create')); ?>"
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

            <form action="<?php echo e(route('pacientes.index')); ?>"
                  method="GET"
                  class="buscador-form">

                <input
                    type="text"
                    name="dni"
                    class="buscador-input"
                    placeholder="Ingrese el DNI del paciente"
                    value="<?php echo e($dni ?? ''); ?>"
                >

                <button type="submit"
                        class="btn-paciente btn-buscar">
                    Buscar
                </button>

                <a href="<?php echo e(route('pacientes.index')); ?>"
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

                    <?php $__empty_1 = true; $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr>

                          <td>
                            <strong>#<?php echo e($loop->iteration); ?></strong>
                          </td>

                            <td>
                                <?php echo e($paciente->apellido_nombre); ?>

                            </td>

                            <td>
                                <?php echo e($paciente->dni); ?>

                            </td>

                            <td>
                                <?php echo e($paciente->edad); ?>

                            </td>

                            <td>
                                <?php echo e($paciente->medico_asignado); ?>

                            </td>

                            <td>

                                <div class="acciones">

                                    <a href="<?php echo e(route('pacientes.show', $paciente->id)); ?>"
                                       class="btn-accion btn-ver">
                                        Ver
                                    </a>

                                    <a href="<?php echo e(route('pacientes.edit', $paciente->id)); ?>"
                                       class="btn-accion btn-editar">
                                        Editar
                                    </a>

                                    <form
                                        action="<?php echo e(route('pacientes.destroy', $paciente->id)); ?>"
                                        method="POST"
                                        class="form-eliminar">

                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>

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

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <tr>

                            <td colspan="6"
                                style="text-align:center; padding:30px;">

                                No se encontraron pacientes.

                            </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

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
<?php endif; ?><?php /**PATH C:\laragon\www\formulario\2026\miba_laravel\resources\views/pacientes/index.blade.php ENDPATH**/ ?>