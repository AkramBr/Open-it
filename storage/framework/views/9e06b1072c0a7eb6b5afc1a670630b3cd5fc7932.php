<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Jobs</div>

                <div class="body-panel">
                        <?php echo Form::open(array('route'=>'job.store')); ?>


                            <div class="form-group">

                                <?php echo Form::label('titre','enter titre'); ?>

                                <?php echo Form::text('titre',null,['class'=>'form-control']); ?>


                            </div>
                            <div class="form-group">
                            
                                <?php echo Form::label('description','Entrer votre Description'); ?>

                                <?php echo Form::textarea('description',null,['class'=>'form-control']); ?>


                            </div>
                            <div class="form-group">
                            
                                <?php echo Form::button('crée votre offre',['type'=>'submit','class'=>'btn btn-primary']); ?>

                                

                            </div>                            

                        <?php echo Form::close(); ?>



                </div>
            </div>
                <?php if($errors->has()): ?>
                <ul class="alert alert-danger">
                    
                
                <?php foreach($errors->all() as $error): ?>
                  <li>  <?php echo e($error); ?></li>
                <?php endforeach; ?>
                </ul>
                <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>