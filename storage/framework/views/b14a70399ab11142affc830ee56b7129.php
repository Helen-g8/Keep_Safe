<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/nearulogo.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .font-palatino {
            font-family: 'Palatino Linotype';
        }
        @font-face {
            font-family: "Palatino Linotype";
            src: url('<?php echo e(asset('fonts/Palatino Linotype.ttf')); ?>');
            font-weight: 400;
        }
        @font-face {
            font-family: "Palatino Linotype";
            src: url('<?php echo e(asset('fonts/Palatino Linotype Regular.ttf')); ?>');
            font-weight: 300;
        }
        @font-face {
            font-family: "Palatino Linotype";
            src: url('<?php echo e(asset('fonts/Palatino Linotype Bold.ttf')); ?>');
            font-weight: 700;
        }
    </style>
</head>

<body class="font-[Acme]">
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav.nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    <div class="h-screen pt-[52px]">
        <?php echo e($slot); ?>

    </div>
</body>

</html>
<?php /**PATH /home/alexticas2006/GitHub/Keep_Safe/resources/views/components/layout.blade.php ENDPATH**/ ?>