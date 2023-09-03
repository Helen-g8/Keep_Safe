<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="bg-gradient-to-br from-orange-400 to-orange-300 min-h-screen flex flex-col justify-center items-center">
        <label class="text-center block mb-4 text-3xl font-bold text-white tracking-[4px]">Choose your role</label>
        <div class="grid gap-6 md:grid-cols-2 px-4 mt-6">
            <a href="/signUp?rol=1" type="button" class="text-white bg-[#3d2A58] hover:bg-[#4B2579] focus:ring-4 focus:outline-none font-semibold rounded-lg text-lg px-8 py-3 text-center transition-all duration-300 transform hover:scale-105">I'm a Landlord</a>
            <a href="/signUp?rol=2" type="button" class="text-white bg-[#3d2A58] hover:bg-[#4B2579 focus:ring-4 focus:outline-none font-semibold rounded-lg text-lg px-8 py-3 text-center transition-all duration-300 transform hover:scale-105">I'm a Tenant</a>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

<?php /**PATH /home/alexticas2006/GitHub/Keep_Safe/resources/views/selectRole.blade.php ENDPATH**/ ?>