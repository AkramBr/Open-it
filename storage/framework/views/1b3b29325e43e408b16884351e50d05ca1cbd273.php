<?php $__env->startSection('content'); ?>

        <h2 class="animated wow fadeIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">Les derniers offres</h2>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

        <?php if(Session::has('message')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
        <?php endif; ?>
            <div class="panel panel-default">
                <div class="panel-heading">Jobs</div>


                <table class="table">
                    <tr>
                        <th>Titre</th>
                        <th>Action</th>
                        </tr>
                    <?php foreach($jobs as $job): ?>
                    <tr>
                        <td> 
                          <?php echo e(link_to_route('job.show',$job->titre,[$job->id])); ?>

                    </td>
                        <td>
                            
                            <?php echo Form::open(array('route'=>['job.destroy',$job->id],'method'=>'DELETE')); ?>


                            <?php echo e(link_to_route('job.edit','Edit',[$job->id],['class'=>'btn btn-success'])); ?>


                            |
                            <?php echo Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']); ?>

                           <?php echo Form::close(); ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                
            </div>
            <?php echo e(link_to_route('job.create','Ajouter nouveau',null,['class'=>' btn btn-primary'])); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>