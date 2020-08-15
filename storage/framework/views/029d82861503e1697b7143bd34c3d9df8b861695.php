<!doctype html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Users</title>

    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css" />

</head>

<body>

    <div class="mw6 center pa3 sans-serif">

        <h1 class="mb4">Users</h1>



        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="pa2 mb3 striped--near-white">

            <header class="b mb2"><?php echo e($user->name); ?></header>

            <div class="pl2">

                <p class="mb2">id: <?php echo e($user->id); ?></p>

                <p class="mb2">email: <?php echo e($user->email); ?></p>

                <p class="mb2">details: <?php echo e($user->remember_token); ?></p>

            </div>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</body>

</html><?php /**PATH C:\Users\KAYODE OKUNLADE\Desktop\projects\tryit\resources\views/byebye.blade.php ENDPATH**/ ?>