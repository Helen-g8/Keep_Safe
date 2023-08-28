<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['label', 'name', 'type' => 'text', 'placeholder' => ' ', 'required' => false, 'class' => ' ', 'value' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['label', 'name', 'type' => 'text', 'placeholder' => ' ', 'required' => false, 'class' => ' ', 'value' => null]); ?>
<?php foreach (array_filter((['label', 'name', 'type' => 'text', 'placeholder' => ' ', 'required' => false, 'class' => ' ', 'value' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div>
    <label for="last_name" class="block mt-2 text-sm font-medium"><?php echo e($label); ?></label>
    <input type="<?php echo e($type); ?>" name="<?php echo e($name); ?>" value="<?php echo e(old($name) ?? $value); ?>"
        class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 <?php echo e($class); ?>"
        placeholder="<?php echo e($placeholder); ?>" <?php if($required): echo 'required'; endif; ?>>
        <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-red-500"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>



<?php /**PATH /home/alexticas2006/GitHub/Keep_Safe/resources/views/components/input.blade.php ENDPATH**/ ?>