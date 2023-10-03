<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<?php if ($pager) : ?>
  <nav>
    <ul class="pagination">
      <?php if ($pager->hasPrevious()) : ?>
        <li class="page-item">
          <a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="visually-hidden">previous</span>
          </a>
        </li>
      <?php endif ?>

      <?php foreach ($pager->links() as $link) : ?>
        <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
          <a class="page-link" href="<?= $link['uri'] ?>">
            <?= $link['title'] ?>
          </a>
        </li>
      <?php endforeach ?>

      <?php if ($pager->hasNext()) : ?>
        <li class="page-item">
          <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="next">
            <span aria-hidden="true">&raquo;</span>
            <span class="visually-hidden">next</span>
          </a>
        </li>
      <?php endif ?>
    </ul>
  </nav>
<?php endif ?>
