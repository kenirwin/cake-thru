<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Women'), ['controller' => 'Women', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Woman'), ['controller' => 'Women', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Convents'), ['controller' => 'Convents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Convent'), ['controller' => 'Convents', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roles view large-9 medium-8 columns content">
    <h3><?= h($role->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Woman') ?></th>
            <td><?= $role->has('woman') ? $this->Html->link($role->woman->name, ['controller' => 'Women', 'action' => 'view', $role->woman->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Convent') ?></th>
            <td><?= $role->has('convent') ? $this->Html->link($role->convent->name, ['controller' => 'Convents', 'action' => 'view', $role->convent->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($role->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($role->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= $this->Number->format($role->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date') ?></th>
            <td><?= $this->Number->format($role->end_date) ?></td>
        </tr>
    </table>
</div>
