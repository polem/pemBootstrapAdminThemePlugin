[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

<div class="container-fluid">
  <h1>[?php echo <?php echo $this->getI18NString('list.title') ?> ?]</h1>

  [?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]
  [?php include_partial('<?php echo $this->getModuleName() ?>/list_header', array('pager' => $pager)) ?]
</div>

<div class="container-fluid">
  <div class="row-fluid">
<?php if ($this->configuration->hasFilterForm()): ?>
    <div class="pull-left span3">
      [?php include_partial('<?php echo $this->getModuleName() ?>/filters', array('form' => $filters, 'configuration' => $configuration)) ?]
    </div>
<?php endif; ?>
    <div class="content <?php echo $this->configuration->hasFilterForm() ? 'span9' : 'span12' ?>">
<?php if ($this->configuration->getValue('list.batch_actions')): ?>
      <form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')) ?]" method="post">
<?php endif; ?>
        [?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?]
        <div class="clearfix">
            <ul class="unstyled">
              [?php include_partial('<?php echo $this->getModuleName() ?>/list_batch_actions', array('helper' => $helper)) ?]
              [?php include_partial('<?php echo $this->getModuleName() ?>/list_actions', array('helper' => $helper)) ?]
            </ul>
        </div>
<?php if ($this->configuration->getValue('list.batch_actions')): ?>
    </form>
<?php endif; ?>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div id="sf_admin_footer">
    [?php include_partial('<?php echo $this->getModuleName() ?>/list_footer', array('pager' => $pager)) ?]
  </div>
</div>
