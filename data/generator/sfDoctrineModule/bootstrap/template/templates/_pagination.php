<div class="pagination">
  <ul>
    <li class="prev"><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=1">&laquo;</a></li>
    <li><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getPreviousPage() ?]">&larr;</a></li>
    [?php foreach ($pager->getLinks() as $page): ?]
      [?php if ($page == $pager->getPage()): ?]
        <li class="active"><a href="#">[?php echo $page ?]</a></li>
      [?php else: ?]
        <li><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $page ?]">[?php echo $page ?]</a></li>
      [?php endif; ?]
    [?php endforeach; ?]
    <li><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getNextPage() ?]">&rarr;</a></li>
    <li class="next"><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getLastPage() ?]">&raquo;</a></li>
  </ul>
</div>
