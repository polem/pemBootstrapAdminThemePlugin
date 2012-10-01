[?php if ($sf_user->hasFlash('notice')): ?]
  <div class="alert">
    <a class="close" data-dismiss="alert" href="#">&times;</a>
    [?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?]
  </div>
[?php endif; ?]

[?php if ($sf_user->hasFlash('error')): ?]
  <div class="alert alert-error">
    <a class="close" data-dismiss="alert" href="#">&times;</a>
    [?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?]
  </div>
[?php endif; ?]
