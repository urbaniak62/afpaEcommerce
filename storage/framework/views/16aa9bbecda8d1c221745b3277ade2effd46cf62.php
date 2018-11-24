<?php $__env->startSection('content'); ?>

<div class="container" id="titreins">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <h3><i>Renseigner vos données personnelles</i></h3>
        </div>
    </div>
</div>
<div class="container" id="FormIns">
    <form method="post" action="<?php echo e(url('/inscription')); ?>">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Civilité</label>
                    <select class="form-control" name="civilite" id="civ">
                        <option  >Madame</option>
                        <option >Monsieur</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo e(old('nom')); ?>" placeholder="Entrer votre nom">
                </div>
            </div>
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo e(old('prenom')); ?>placeholder="Entrer votre prénom">
                </div>
                <?php if($errors->has('prenom')): ?>
                <div class="alert alert-danger" role="alert">
                      <?php echo e($errors->first('prenom')); ?>

                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?> placeholder="Entrer votre email">
                </div>
                <?php if($errors->has('email')): ?>
                <div class="alert alert-danger" role="alert">
                      <?php echo e($errors->first('email')); ?>

                </div>
                <?php endif; ?>
            </div>
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput">Mot de passe</label>
                    <input type="password" class="form-control" id="mdp" name="password" placeholder="Entrer votre mot de passe">
                </div>
                <?php if($errors->has('password')): ?>
                <div class="alert alert-danger" role="alert">
                      <?php echo e($errors->first('password')); ?>

                </div>
                <?php endif; ?>
            </div>
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput">Confirmation du mot de passe</label>
                    <input type="password" class="form-control" id="mdpconf" name="password_confirmation" placeholder="Confirmation">
                </div>
                <?php if($errors->has('password_confirmation')): ?>
                <div class="alert alert-danger" role="alert">
                      <?php echo e($errors->first('password_confirmation')); ?>

                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Numéro de rue</label>
                    <input type="text" class="form-control" id="numrue" name="numRue" value="<?php echo e(old('numRue')); ?>placeholder="Numéro de votre rue">
                </div>
                <?php if($errors->has('numRue')): ?>
                <div class="alert alert-danger" role="alert">
                      <?php echo e($errors->first('numRue')); ?>

                </div>
                <?php endif; ?>
            </div>
            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nom de rue</label>
                    <input type="text" class="form-control" id="nomrue" name="nomRue" value="<?php echo e(old('nomRue')); ?>placeholder="Nom de votre rue">
                </div>
                <?php if($errors->has('nomRue')): ?>
                <div class="alert alert-danger" role="alert">
                      <?php echo e($errors->first('nomRue')); ?>

                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Code Postal</label>
                    <input type="text" class="form-control" id="cp" name="cp" value="<?php echo e(old('cp')); ?> placeholder="Votre code postal">
                </div>
                <?php if($errors->has('cp')): ?>
                <div class="alert alert-danger" role="alert">
                      <?php echo e($errors->first('cp')); ?>

                </div>
                <?php endif; ?>
            </div>
            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville" value="<?php echo e(old('ville')); ?> placeholder="Nom de votre ville">
                </div>
                <?php if($errors->has('ville')): ?>
                <div class="alert alert-danger" role="alert">
                      <?php echo e($errors->first('ville')); ?>

                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Tél domicile</label>
                    <input type="text" class="form-control" id="teld" name="telDom" placeholder="Votre téléphone fixe">
                </div>
                <?php if($errors->has('telDom')): ?>
                <div class="alert alert-danger" role="alert">
                      <?php echo e($errors->first('telDom')); ?>

                </div>
                <?php endif; ?>
            </div>
            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <label for="formGroupExampleInput">Tél portable</label>
                    <input type="text" class="form-control" id="telp" name="telPort" placeholder="Votre téléphone portable">
                </div>
                <?php if($errors->has('telPort')): ?>
                <div class="alert alert-danger" role="alert">
                      <?php echo e($errors->first('telPort')); ?>

                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8 col-md-8">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Comment avez vous connu notre marque ?</label>
                    <select class="form-control" id="connu" name="connu">
                        <option>Site Web</option>
                        <option>Un ami</option>
                        <option>Pages Jaunes</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-4 col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="envins" onclick="ouvind()">Envoyer</button>
                </div>
            </div>
        </div>
    </form>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>