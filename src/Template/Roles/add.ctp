<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Women'), ['controller' => 'Women', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Woman'), ['controller' => 'Women', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Convents'), ['controller' => 'Convents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Convent'), ['controller' => 'Convents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roles form large-9 medium-8 columns content">
    <?= $this->Form->create($role) ?>
    <fieldset>
        <legend><?= __('Add Role') ?></legend>
        <?php
            echo $this->Form->control('woman_id', ['options' => $women]);
            echo $this->Form->control('convent_id', ['options' => $convents]);
            echo $this->Form->control('role');
            echo $this->Form->control('start_date');
            echo $this->Form->control('end_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
