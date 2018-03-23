<div>dsfsdfsds</div>
<?php if($errors->has('email')): ?>
    <span class="invalid-feedback">
        <strong><?php echo e($errors->first('stock')); ?></strong>
    </span>
<?php endif; ?>