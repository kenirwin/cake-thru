<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Portraits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Women'), ['controller' => 'Women', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Woman'), ['controller' => 'Women', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="portraits form large-9 medium-8 columns content">
    <?= $this->Form->create($portrait) ?>
    <fieldset>
        <legend><?= __('Add Portrait') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('woman_id', ['options' => $women]);
            echo $this->Form->control('viaf_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
