
<div class="well">
  <strong>[?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?]</strong>
  [?php if ($pager->haveToPaginate()): ?]
    [?php echo __('( page <strong>%%page%%</strong>/%%nb_pages%% )', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?]
  [?php endif; ?]
</div>
