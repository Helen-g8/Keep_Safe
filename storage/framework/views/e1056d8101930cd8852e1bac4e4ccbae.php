<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="flex justify-center items-center">
    <img src="<?php echo e(asset('NearU.jpg')); ?>" alt="NearU Logo" width="300" height="200">
    </div>

    <div class="py-6 px-4 text-white font-bold text-md bg-blue-400 ml-6 mr-6 text-center italic">
        "Un nuevo mundo se abre ante ti con el inicio de tu viaje universitario. Está repleto de momentos inolvidables
        que darán forma a tu futuro y conexiones que durarán toda la vida. Pero somos conscientes de que, en medio de la
        emoción, la distancia puede ser un obstáculo. En NearU, hemos asumido la misión de convertir esa distancia en
        una historia del pasado. Estamos aquí para brindarte el apoyo que necesitas, conectándote con propietarios de
        alquileres convenientes, permitiéndote negociar y acordar términos de manera segura. Imagina un segundo hogar
        que te acerca a tu universidad, y eso es lo que estamos aquí para proporcionarte. Tu futuro brillante está a
        solo unos pasos de tu hogar, con NearU como tu aliado constante."
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

<?php /**PATH /home/alexticas2006/GitHub/Keep_Safe/resources/views/welcome.blade.php ENDPATH**/ ?>