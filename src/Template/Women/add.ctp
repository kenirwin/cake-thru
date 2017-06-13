<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Women'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Portraits'), ['controller' => 'Portraits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Portrait'), ['controller' => 'Portraits', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="women form large-9 medium-8 columns content">
    <?= $this->Form->create($woman) ?>
    <fieldset>
        <legend><?= __('Add Woman') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('viaf_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
