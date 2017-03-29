<?php if ($sf_request->getError('delete')): ?>
<div class="form-errors">
  <h2><?php echo __('Could not delete the selected %name%', array('%name%' => 'Property template')) ?></h2>
  <ul>
    <li><?php echo $sf_request->getError('delete') ?></li>
  </ul>
</div>
<?php elseif ($sf_user->hasFlash('notice')): ?>
<div class="save-ok">
<h2><?php echo __($sf_user->getFlash('notice')) ?></h2>
</div>
<?php endif; ?>
