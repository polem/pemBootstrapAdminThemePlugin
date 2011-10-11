[?php if ($sf_user->hasFlash('notice')): ?]
  <div class="alert-message info"><p>[?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?]</p></div>
[?php endif; ?]

[?php if ($sf_user->hasFlash('error')): ?]
  <div class="alert-message error"><p>[?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?]</p></div>
[?php endif; ?]
