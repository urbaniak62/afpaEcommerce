<?php $__env->startSection('content'); ?>

    <h1>ESPACE ADMINISTRATION</h1>
    <table class="table table-hover table-dark">
        <h3>LES MEMBRES</h3>
        <thead>
            <tr>

                <th scope="col">civilité</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Email</th>
                <th scope="col">adresse</th>

                <th scope="col">tel domicile</th>
                <th scope="col">tel portable</th>
                <th scope="col">connu ou</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $utilisateurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="/admin" method="">
                <?php echo csrf_field(); ?>
            <tr>
                <td><?php echo e($user->civilite); ?></td>
                <td><?php echo e($user->nom); ?></td>
                <td><?php echo e($user->prenom); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->numRue ." ".$user->nomRue ." ". $user->cp . " " . $user->ville); ?></td>
                <td><?php echo e($user->telDom); ?></td>
                <td><?php echo e($user->telPort); ?></td>
                <td><?php echo e($user->connu); ?></td>

                <td><button class="btn btn-danger" type="submit">suprimer</button></td>
            </tr>
        </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>