<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['label', 'name', 'type' => 'text', 'placeholder' => ' ', 'required' => false, 'class' => ' ']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['label', 'name', 'type' => 'text', 'placeholder' => ' ', 'required' => false, 'class' => ' ']); ?>
<?php foreach (array_filter((['label', 'name', 'type' => 'text', 'placeholder' => ' ', 'required' => false, 'class' => ' ']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div>
    <label for="last_name" class="block mb-2 text-sm font-medium text-black-900"><?php echo e($label); ?></label>
    <input type="<?php echo e($type); ?>" name="<?php echo e($name); ?>"
        class="bg-gray-50 border border-gray-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 <?php echo e($class); ?>"
        placeholder="<?php echo e($placeholder); ?>" <?php if($required): echo 'required'; endif; ?>>
</div>



<?php /**PATH /home/alexticas2006/GitHub/Keep_Safe/resources/views/components/input.blade.php ENDPATH**/ ?>