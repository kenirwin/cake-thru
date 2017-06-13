<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Portrait'), ['action' => 'edit', $portrait->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Portrait'), ['action' => 'delete', $portrait->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portrait->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Portraits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portrait'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Women'), ['controller' => 'Women', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Woman'), ['controller' => 'Women', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="portraits view large-9 medium-8 columns content">
    <h3><?= h($portrait->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($portrait->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Woman') ?></th>
            <td><?= $portrait->has('woman') ? $this->Html->link($portrait->woman->name, ['controller' => 'Women', 'action' => 'view', $portrait->woman->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Viaf Url') ?></th>
            <td><?= h($portrait->viaf_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($portrait->id) ?></td>
        </tr>
    </table>
</div>
